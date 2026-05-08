<?php

declare(strict_types=1);

namespace Domain\Monitoring\Events;

use Domain\Monitoring\Models\TrapEvent;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

final class TrapTriggered implements ShouldBroadcast
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public function __construct(
        public string $trapId,
        public string $trapEventId,
        public string $trapName,
        public string $gatewayId,
        public int $batteryLevel,
        public int $totalCatches,
        public string $caughtAt,
        public ?TrapEvent $trapEvent = null,
    ) {}

    public function broadcastOn(): Channel
    {
        return new Channel('trap-events');
    }

    public function broadcastAs(): string
    {
        return 'trap.event';
    }

    public function broadcastWith(): array
    {
        $eventData = [
            'id' => $this->trapEventId,
            'trap_id' => $this->trapId,
            'caught_at' => $this->caughtAt,
            'battery_level' => $this->batteryLevel,
        ];

        if ($this->trapEvent !== null) {
            $eventData['rssi'] = $this->trapEvent->rssi;
            $eventData['signal_quality'] = $this->trapEvent->signalQuality();
            $eventData['has_weak_signal'] = $this->trapEvent->hasWeakSignal();
            $eventData['metadata'] = $this->trapEvent->metadata;
        }

        $eventData['trap'] = [
            'name' => $this->trapName,
            'id' => $this->trapId,
        ];

        return [
            'type' => 'trap_event',
            'event' => $eventData,
        ];
    }
}
