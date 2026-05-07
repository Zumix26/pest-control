# PowerShell script to start WebSocket server with Laravel .env variables

# Load Laravel .env file
if (Test-Path .env) {
    Write-Host "Loading variables from .env file..." -ForegroundColor Cyan
    Get-Content .env | ForEach-Object {
        if ($_ -match '^\s*([^#][^=]+)=(.*)$') {
            $key = $matches[1].Trim()
            $value = $matches[2].Trim()
            # Remove quotes if present
            if ($value -match '^["''](.*)["'']$') {
                $value = $matches[1]
            }
            if ($key -match '^(APP_NAME|REDIS_HOST|REDIS_PORT|REDIS_PASSWORD|REDIS_PREFIX|WS_PORT)$') {
                [Environment]::SetEnvironmentVariable($key, $value, 'Process')
                Write-Host "  $key = $value" -ForegroundColor Gray
            }
        }
    }
} else {
    Write-Host "Warning: .env file not found, using defaults" -ForegroundColor Yellow
}

# Convert APP_NAME to slug format (like Laravel)
if (-not $env:REDIS_PREFIX -and $env:APP_NAME) {
    $appNameSlug = $env:APP_NAME.ToLower() -replace '[^a-z0-9]', '_' -replace '_+', '_' -replace '^_|_$', ''
    $env:REDIS_PREFIX = "${appNameSlug}_database_"
}

Write-Host ""
Write-Host "Configuration:" -ForegroundColor Cyan
Write-Host "  APP_NAME: $($env:APP_NAME ?? 'laravel')"
Write-Host "  REDIS_PREFIX: $($env:REDIS_PREFIX ?? 'laravel_database_')"
Write-Host "  Redis: $($env:REDIS_HOST ?? '127.0.0.1'):$($env:REDIS_PORT ?? '6379')"
Write-Host "  Channel: $($env:REDIS_PREFIX ?? 'laravel_database_')trap-events"
Write-Host ""
Write-Host "Starting WebSocket server..." -ForegroundColor Green
Write-Host ""

node websocket-server.js
