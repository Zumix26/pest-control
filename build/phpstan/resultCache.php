<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1768117498,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.33',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80500,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, level: 5, paths: [D:\\Projects\\pest-contol\\src], excludePaths: {analyseAndScan: [vendor], analyse: []}, tmpDir: D:\\Projects\\pest-contol\\build\\phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}}}',
  'analysedPaths' => 
  array (
    0 => 'D:\\Projects\\pest-contol\\src',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'D:/Projects/pest-contol/composer.lock' => 'fcccf0b32218d93ba7a3e053e032ff1738ba3a87',
  ),
  'composerInstalled' => 
  array (
    'D:/Projects/pest-contol/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.16.1',
          'version' => '7.16.1.0',
          'reference' => 'f0fdfd8e654e0d38bc2ba756a6cabe7be287390b',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.1',
          'version' => '0.14.1.0',
          'reference' => 'f05858549e5f9d7bb45875a75583240a38a281d0',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'darkaonline/l5-swagger' => 
        array (
          'pretty_version' => '8.6.5',
          'version' => '8.6.5.0',
          'reference' => '4cf2b3faae9e9cffd05e4eb6e066741bf56f0a85',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../darkaonline/l5-swagger',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/annotations' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => '901c2ee5d26eb64ff43c47976e114bf00843acf7',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../doctrine/annotations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.5',
          'version' => '1.1.5.0',
          'reference' => '459c2f5dd3d6a4633d3b5f46ee2b1c40f57d3f38',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.6',
          'version' => '0.6.0.0',
          'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.46.0',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.8.1',
          'version' => '3.8.1.0',
          'reference' => 'ff3725291bc4c7e6032b5a54776e3e5104c86db9',
          'type' => 'phpstan-extension',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.46.0',
          'version' => '12.46.0.0',
          'reference' => '9dcff48d25a632c1fadb713024c952fec489c4ae',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => 'c67b4195b75491e4dfc6b00b1c78b68d86f54c90',
          'type' => 'project',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.8',
          'version' => '0.3.8.0',
          'reference' => '096748cdfb81988f60090bbb839ce3205ace0d35',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.7',
          'version' => '2.0.7.0',
          'reference' => 'cb291e4c998ac50637c7eeb58189c14f5de5b9dd',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '4efa10c1e56488e658d10adf7b7b7dcd19940bfb',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.30.2',
          'version' => '3.30.2.0',
          'reference' => '5966a8ba23e62bdb518dd9e0e665c2dbd4b5b277',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.30.2',
          'version' => '3.30.2.0',
          'reference' => 'ab4f9d0d672f601b102936aa728801dd1a11968d',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.7.0',
          'version' => '7.7.0.0',
          'reference' => '8d587cddee53490f9b82bf203d3a9aa7ea4f9807',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.7.0',
          'version' => '7.7.0.0',
          'reference' => '62ccc1a0435e1c54e10ee6022df28d6c04c2946c',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.0',
          'version' => '3.11.0.0',
          'reference' => 'bdb375400dcd162624531666db4799b36b64e4a1',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.3',
          'version' => '1.3.3.0',
          'reference' => '2befc2f42d7c715fd9d95efc31b1081e5d765004',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.1',
          'version' => '4.1.1.0',
          'reference' => 'c99059c0315591f1a0db7ad6002000288ab8dc72',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.8.3',
          'version' => '8.8.3.0',
          'reference' => '1dc9e88d105699d0fee8bb18890f41b274f6b4c4',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.3.3',
          'version' => '2.3.3.0',
          'reference' => '6fb2a640ff502caace8e05fd7be3b503a7e1c017',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v4.3.1',
          'version' => '4.3.1.0',
          'reference' => 'bc57a84e77afd4544ff9643a6858f68d05aeab96',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '9d4b93d7f73d3f9c3189bb22c220fef271cdf568',
          'type' => 'composer-plugin',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '25bb17e37920ccc35cbbcda3b00d596aadf3e58d',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => 'e12a07046b826a40b1c8632fd7b80d6b8d7b628e',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'd9b32b60b2385e1688a68cc227594738ec26d96c',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-profanity' => 
        array (
          'pretty_version' => 'v4.2.1',
          'version' => '4.2.1.0',
          'reference' => '343cfa6f3564b7e35df0ebb77b7fa97039f72b27',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../pestphp/pest-plugin-profanity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.6.6',
          'version' => '5.6.6.0',
          'reference' => '5cee1d3dfc2d2aa6599834520911d246f656bcb8',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.12.0',
          'version' => '1.12.0.0',
          'reference' => '92a98ada2b93d9b201a613cb5a33584dde25f195',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '1e0cd5370df5dd2e556a36b9c62f62e555870495',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.33',
          'version' => '2.1.33.0',
          'reference' => '9e800e6bee7d5bd02784d4c6069b48032d16224f',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '12.5.2',
          'version' => '12.5.2.0',
          'reference' => '4a9739b51cbcb355f6e95659612f92e282a7077b',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '961bc913d42fe24a257bfff826a5068079ac7782',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '12b54e689b07a25a9b41e57736dfab6ec9ae5406',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'e1367a453f0eda562eedb4f659e13aa900d66c53',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '8.0.0',
          'version' => '8.0.0.0',
          'reference' => 'f258ce36aa457f3aa3339f9ed4c81fc66dc8c2cc',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '12.5.4',
          'version' => '12.5.4.0',
          'reference' => '4ba0e923f9d3fc655de22f9547c01d15a41fc93a',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../psr/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.2',
          'version' => '4.9.2.0',
          'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.2',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '4.2.0',
          'version' => '4.2.0.0',
          'reference' => '90f41072d220e5c40df6e8635f5dafba2d9d4d04',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '7.1.3',
          'version' => '7.1.3.0',
          'reference' => 'dc904b4bb3ab070865fa4068cd84f3da8b945148',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'bad4316aba5303d0221f43f8cee37eb58d384bbb',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '7ab1ea946c012266ca32390913653d844ecd085f',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '8.0.3',
          'version' => '8.0.3.0',
          'reference' => '24a711b5c916efc6d6e62aa65aa2ec98fef77f68',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '016951ae10980765e4e7aee491eb288c64e505b7',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '8.0.2',
          'version' => '8.0.2.0',
          'reference' => 'ef1377171613d09edd25b7816f05be8313f9115d',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '97ffee3bcfb5805568d6af7f0f893678fc076d2f',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '1effe8e9b8e068e9ae228e542d5d11b5d16db894',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '4bfa827c969c98be1e527abd576533293c634f6a',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '0b01998a7d5b1f122911a66bebcb8d46f0c82d8c',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'e549163b9760b8f71f191651d22acf32d56d6d4d',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '3e6ccf7657d4f0a59200564b08cead899313b53c',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'swagger-api/swagger-ui' => 
        array (
          'pretty_version' => 'v5.31.0',
          'version' => '5.31.0.0',
          'reference' => '61dddd44389bf25922639afd682f50b8a0fb5cf4',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../swagger-api/swagger-ui',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '832119f9b8dbc6c8e6f65f30c5969eca1e88764f',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => '732a9ca6cd9dfd940c639062d5edbde2f6727fb6',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '6225bd458c53ecdee056214cb4a2ffaf58bd592b',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '48be2b0653594eea32dcef130cca1c811dcf25c2',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '573f95783a2ec6e38752979db139f09fec033f03',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => 'fffe05569336549b20a1be64250b40516d6e8d06',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => 'a70c745d4cea48dbd609f4075e5f5cbce453bd52',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => '885211d4bed3f857b8c964011923528a55702aa5',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => 'e472d35e230108231ccb7f51eb6b2100cac02ee4',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'bdb02729471be5d047a3ac4a69068748f1a6be7a',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => '2f8e1a6cdf590ca63715da4d3a7a3327404a523f',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => '5d3fd7adf8896c2fdb54e2f0f35b1bcbd9e45090',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.0.1',
          'version' => '8.0.1.0',
          'reference' => 'ba65a969ac918ce0cc3edfac6cdde847eba231dc',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.0.3',
          'version' => '8.0.3.0',
          'reference' => '60a8f11f0e15c48f2cc47c4da53873bb5b62135d',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '2498e9f81b7baa206f44de583f2f48350b90142c',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => '7e99bebcb3f90d8721890f2963463280848cba92',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.4.1',
          'version' => '7.4.1.0',
          'reference' => '24dd4de28d2e3988b311751ac49e684d783e2345',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.5',
          'version' => '0.8.5.0',
          'reference' => 'cf6fb197b676ba716837c886baca842e4db29005',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '7989e43bf381af0eac72e4f0ca5bcbfa81658be4',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.3',
          'version' => '5.6.3.0',
          'reference' => '955e7815d677a3eaa7075231212f2110983adecc',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'bdbabc199a7ba9965484e4725d66170e5711323b',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'zircote/swagger-php' => 
        array (
          'pretty_version' => '4.11.1',
          'version' => '4.11.1.0',
          'reference' => '7df10e8ec47db07c031db317a25bef962b4e5de1',
          'type' => 'library',
          'install_path' => 'D:\\Projects\\pest-contol\\vendor\\composer/../zircote/swagger-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'D:\\Projects\\pest-contol\\vendor\\larastan\\larastan\\bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
    'phar://D:\\Projects\\pest-contol\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
    'phar://D:\\Projects\\pest-contol\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar://D:\\Projects\\pest-contol\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar://D:\\Projects\\pest-contol\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'Zend OPcache',
    7 => 'bcmath',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dom',
    13 => 'fileinfo',
    14 => 'filter',
    15 => 'hash',
    16 => 'iconv',
    17 => 'json',
    18 => 'lexbor',
    19 => 'libxml',
    20 => 'mbstring',
    21 => 'mysqli',
    22 => 'mysqlnd',
    23 => 'openssl',
    24 => 'pcre',
    25 => 'pdo_mysql',
    26 => 'pdo_pgsql',
    27 => 'pdo_sqlite',
    28 => 'pgsql',
    29 => 'random',
    30 => 'readline',
    31 => 'session',
    32 => 'sodium',
    33 => 'sqlite3',
    34 => 'standard',
    35 => 'tokenizer',
    36 => 'uri',
    37 => 'xml',
    38 => 'xmlreader',
    39 => 'xmlwriter',
    40 => 'zip',
    41 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer::$id (int) does not accept string.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 38,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer::$created_at (Carbon\\Carbon|string|null) does not accept DateTimeImmutable.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 50,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer::$updated_at (Carbon\\Carbon|string|null) does not accept DateTimeImmutable.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
       'line' => 52,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 52,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer::$deleted_at (Carbon\\Carbon|string|null) does not accept DateTimeImmutable|null.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility::$id (int) does not accept string.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 39,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility::$created_at (Carbon\\Carbon|string|null) does not accept DateTimeImmutable.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
       'line' => 52,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 52,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility::$updated_at (Carbon\\Carbon|string|null) does not accept DateTimeImmutable.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility::$deleted_at (Carbon\\Carbon|string|null) does not accept DateTimeImmutable|null.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway::$id (int) does not accept string.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway::$last_seen_at (Carbon\\Carbon) does not accept DateTimeImmutable.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway::$created_at (Carbon\\Carbon|string|null) does not accept DateTimeImmutable.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
       'line' => 48,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 48,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway::$updated_at (Carbon\\Carbon|string|null) does not accept DateTimeImmutable.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 50,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrapEvent::$id (int) does not accept string.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 30,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrapEvent::$caught_at (Carbon\\Carbon) does not accept DateTimeImmutable.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 35,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrapEvent::$created_at (Carbon\\Carbon|string) does not accept DateTimeImmutable.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 40,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap::$id (int) does not accept string.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap::$last_event_at (Carbon\\Carbon|null) does not accept DateTimeImmutable|null.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
       'line' => 48,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 48,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap::$created_at (Carbon\\Carbon|string|null) does not accept DateTimeImmutable.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 50,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap::$updated_at (Carbon\\Carbon|string|null) does not accept DateTimeImmutable.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
       'line' => 52,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 52,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap::$deleted_at (Carbon\\Carbon|string|null) does not accept DateTimeImmutable|null.',
       'file' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'linesToIgnore' => array (
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php' => 
  array (
    'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php' => 
    array (
      38 => NULL,
      50 => NULL,
      52 => NULL,
      54 => NULL,
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php' => 
  array (
    'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php' => 
    array (
      39 => NULL,
      52 => NULL,
      54 => NULL,
      56 => NULL,
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php' => 
  array (
    'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php' => 
    array (
      36 => NULL,
      46 => NULL,
      48 => NULL,
      50 => NULL,
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php' => 
  array (
    'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php' => 
    array (
      30 => NULL,
      35 => NULL,
      40 => NULL,
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php' => 
  array (
    'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php' => 
    array (
      36 => NULL,
      48 => NULL,
      50 => NULL,
      52 => NULL,
      54 => NULL,
    ),
  ),
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateCustomerDTO.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\DTOs\\CreateCustomerDTO',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateFacilityDTO.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\DTOs\\CreateFacilityDTO',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateGatewayDTO.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\DTOs\\CreateGatewayDTO',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateTrapDTO.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\DTOs\\CreateTrapDTO',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\TrapEventDTO.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\DTOs\\TrapEventDTO',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\UpdateCustomerDTO.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\DTOs\\UpdateCustomerDTO',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\UpdateFacilityDTO.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\DTOs\\UpdateFacilityDTO',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\Http\\Controllers\\Api\\V1\\CustomerController',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\Http\\Controllers\\Api\\V1\\FacilityController',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 78,
      ),
      1 => 
      array (
        0 => 'abort',
        1 => 161,
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\GatewayController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\Http\\Controllers\\Api\\V1\\GatewayController',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 105,
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\Http\\Controllers\\Api\\V1\\TrapController',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 129,
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapEventController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\Http\\Controllers\\Api\\V1\\TrapEventController',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Middleware\\ValidateGatewaySignature.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\Http\\Middleware\\ValidateGatewaySignature',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateCustomerRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Application\\Http\\Requests\\CreateCustomerRequest',
        1 => 'authorize',
        2 => 'App\\Application\\Http\\Requests\\CreateCustomerRequest',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateFacilityRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Application\\Http\\Requests\\CreateFacilityRequest',
        1 => 'authorize',
        2 => 'App\\Application\\Http\\Requests\\CreateFacilityRequest',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateGatewayRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Application\\Http\\Requests\\CreateGatewayRequest',
        1 => 'authorize',
        2 => 'App\\Application\\Http\\Requests\\CreateGatewayRequest',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateTrapRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Application\\Http\\Requests\\CreateTrapRequest',
        1 => 'authorize',
        2 => 'App\\Application\\Http\\Requests\\CreateTrapRequest',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\RegisterTrapEventRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Application\\Http\\Requests\\RegisterTrapEventRequest',
        1 => 'authorize',
        2 => 'App\\Application\\Http\\Requests\\RegisterTrapEventRequest',
      ),
      1 => 
      array (
        0 => 'App\\Application\\Http\\Requests\\RegisterTrapEventRequest',
        1 => 'rules',
        2 => 'App\\Application\\Http\\Requests\\RegisterTrapEventRequest',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\UpdateCustomerRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Application\\Http\\Requests\\UpdateCustomerRequest',
        1 => 'authorize',
        2 => 'App\\Application\\Http\\Requests\\UpdateCustomerRequest',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\UpdateFacilityRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Application\\Http\\Requests\\UpdateFacilityRequest',
        1 => 'authorize',
        2 => 'App\\Application\\Http\\Requests\\UpdateFacilityRequest',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateCustomerUseCase.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\Monitoring\\UseCases\\CreateCustomerUseCase',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateFacilityUseCase.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\Monitoring\\UseCases\\CreateFacilityUseCase',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteCustomerUseCase.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'delete',
        2 => 66,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 19,
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteFacilityUseCase.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\Monitoring\\UseCases\\DeleteFacilityUseCase',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 20,
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateCustomerUseCase.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\Monitoring\\UseCases\\UpdateCustomerUseCase',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateFacilityUseCase.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\Monitoring\\UseCases\\UpdateFacilityUseCase',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateGatewayUseCase.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\UseCases\\CreateGatewayUseCase',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateTrapUseCase.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\UseCases\\CreateTrapUseCase',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\RegisterTrapEventUseCase.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Application\\UseCases\\RegisterTrapEventUseCase',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Customer.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
        1 => 'id',
        2 => 'App\\Domain\\Monitoring\\Entities\\Customer',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
        1 => 'name',
        2 => 'App\\Domain\\Monitoring\\Entities\\Customer',
      ),
      2 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
        1 => 'email',
        2 => 'App\\Domain\\Monitoring\\Entities\\Customer',
      ),
      3 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
        1 => 'phone',
        2 => 'App\\Domain\\Monitoring\\Entities\\Customer',
      ),
      4 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
        1 => 'type',
        2 => 'App\\Domain\\Monitoring\\Entities\\Customer',
      ),
      5 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
        1 => 'billingAddress',
        2 => 'App\\Domain\\Monitoring\\Entities\\Customer',
      ),
      6 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
        1 => 'taxNumber',
        2 => 'App\\Domain\\Monitoring\\Entities\\Customer',
      ),
      7 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
        1 => 'notes',
        2 => 'App\\Domain\\Monitoring\\Entities\\Customer',
      ),
      8 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
        1 => 'status',
        2 => 'App\\Domain\\Monitoring\\Entities\\Customer',
      ),
      9 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
        1 => 'createdAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Customer',
      ),
      10 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
        1 => 'updatedAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Customer',
      ),
      11 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Customer',
        1 => 'deletedAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Customer',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Facility.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'id',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'name',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
      2 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'address',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
      3 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'contactPerson',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
      4 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'contactPhone',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
      5 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'type',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
      6 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'area',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
      7 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'description',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
      8 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'status',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
      9 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'createdAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
      10 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'updatedAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
      11 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'deletedAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
      12 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Facility',
        1 => 'customerId',
        2 => 'App\\Domain\\Monitoring\\Entities\\Facility',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Gateway.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
        1 => 'id',
        2 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
        1 => 'hardwareId',
        2 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
      ),
      2 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
        1 => 'apiKey',
        2 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
      ),
      3 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
        1 => 'name',
        2 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
      ),
      4 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
        1 => 'location',
        2 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
      ),
      5 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
        1 => 'status',
        2 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
      ),
      6 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
        1 => 'lastSeenAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
      ),
      7 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
        1 => 'createdAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
      ),
      8 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
        1 => 'updatedAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
      ),
      9 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
        1 => 'facilityId',
        2 => 'App\\Domain\\Monitoring\\Entities\\Gateway',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Trap.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'id',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'hardwareId',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
      2 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'gatewayId',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
      3 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'name',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
      4 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'type',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
      5 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'status',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
      6 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'location',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
      7 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'batteryLevel',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
      8 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'totalCatches',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
      9 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'lastEventAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
      10 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'createdAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
      11 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'updatedAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
      12 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\Trap',
        1 => 'deletedAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\Trap',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\TrapEvent.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
        1 => 'id',
        2 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
        1 => 'trapId',
        2 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
      ),
      2 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
        1 => 'caughtAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
      ),
      3 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
        1 => 'batteryLevel',
        2 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
      ),
      4 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
        1 => 'signalStrength',
        2 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
      ),
      5 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
        1 => 'metadata',
        2 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
      ),
      6 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
        1 => 'createdAt',
        2 => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\CustomerStatus.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
        1 => 'label',
        2 => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
        1 => 'isActive',
        2 => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\CustomerType.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
        1 => 'label',
        2 => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\FacilityStatus.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Enums\\FacilityStatus',
        1 => 'label',
        2 => 'App\\Domain\\Monitoring\\Enums\\FacilityStatus',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Enums\\FacilityStatus',
        1 => 'isActive',
        2 => 'App\\Domain\\Monitoring\\Enums\\FacilityStatus',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\FacilityType.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Enums\\FacilityType',
        1 => 'label',
        2 => 'App\\Domain\\Monitoring\\Enums\\FacilityType',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\GatewayStatus.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Enums\\GatewayStatus',
        1 => 'label',
        2 => 'App\\Domain\\Monitoring\\Enums\\GatewayStatus',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Enums\\GatewayStatus',
        1 => 'isAvailable',
        2 => 'App\\Domain\\Monitoring\\Enums\\GatewayStatus',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\TrapStatus.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Enums\\TrapStatus',
        1 => 'label',
        2 => 'App\\Domain\\Monitoring\\Enums\\TrapStatus',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Enums\\TrapStatus',
        1 => 'isOperational',
        2 => 'App\\Domain\\Monitoring\\Enums\\TrapStatus',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\TrapType.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\Enums\\TrapType',
        1 => 'label',
        2 => 'App\\Domain\\Monitoring\\Enums\\TrapType',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\Address.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
        1 => 'street',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
        1 => 'city',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
      ),
      2 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
        1 => 'postalCode',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
      ),
      3 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
        1 => 'country',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
      ),
      4 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
        1 => 'toArray',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
      ),
      5 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
        1 => 'fullAddress',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
      ),
      6 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
        1 => 'equals',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\BatteryLevel.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\BatteryLevel',
        1 => 'value',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\BatteryLevel',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\BatteryLevel',
        1 => 'isLow',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\BatteryLevel',
      ),
      2 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\BatteryLevel',
        1 => 'isCritical',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\BatteryLevel',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\HardwareId.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\HardwareId',
        1 => 'value',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\HardwareId',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\HardwareId',
        1 => 'equals',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\HardwareId',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\Location.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\Location',
        1 => 'latitude',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\Location',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\Location',
        1 => 'longitude',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\Location',
      ),
      2 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\Location',
        1 => 'toArray',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\Location',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\SignalStrength.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\SignalStrength',
        1 => 'rssi',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\SignalStrength',
      ),
      1 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\SignalStrength',
        1 => 'isWeak',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\SignalStrength',
      ),
      2 => 
      array (
        0 => 'App\\Domain\\Monitoring\\ValueObjects\\SignalStrength',
        1 => 'quality',
        2 => 'App\\Domain\\Monitoring\\ValueObjects\\SignalStrength',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUuids',
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUuids',
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUuids',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUuids',
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrapEvent.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUuids',
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentCustomerRepository.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 21,
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentFacilityRepository.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 21,
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentGatewayRepository.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 20,
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapEventRepository.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 19,
      ),
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapRepository.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 21,
      ),
    ),
  ),
); },
	'dependencies' => array (
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateCustomerDTO.php' => 
  array (
    'fileHash' => '9870d5926aa7d345ef1b434472a992ebc138bd56',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateCustomerUseCase.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateFacilityDTO.php' => 
  array (
    'fileHash' => 'ef9b86d6aabf955c78ef1ad658d5999ceb1033ea',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateFacilityUseCase.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateGatewayDTO.php' => 
  array (
    'fileHash' => '55054e897a23cadfb72fc7fa342955d54fa2412d',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\GatewayController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateGatewayUseCase.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateTrapDTO.php' => 
  array (
    'fileHash' => '1223510569838cdf17391091fb28716e7dc7a522',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateTrapUseCase.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\TrapEventDTO.php' => 
  array (
    'fileHash' => '405d6270921b56a30a482287825025c2482c1e8c',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapEventController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\RegisterTrapEventUseCase.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\UpdateCustomerDTO.php' => 
  array (
    'fileHash' => 'cabc7cbdaf59e6ff4a94bfdd54bd23fa2f9bccec',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateCustomerUseCase.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\UpdateFacilityDTO.php' => 
  array (
    'fileHash' => '4d93c43312e004c02c02a0eb84ffb737028a3663',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateFacilityUseCase.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\OpenApiSpec.php' => 
  array (
    'fileHash' => '46b96120c018a637bd77392d463e058d6d4ebcaa',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php' => 
  array (
    'fileHash' => 'f1b0aac7f31cfe0b02c28aa2057cbf8706f1f3db',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php' => 
  array (
    'fileHash' => 'c62e5d087793dca49957fa4210c28e9b7138615f',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\GatewayController.php' => 
  array (
    'fileHash' => '94aa8dfaa1be4603faacd480bff17438a696b052',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapController.php' => 
  array (
    'fileHash' => 'a620c1de135a058129480335c86deff63d62f932',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapEventController.php' => 
  array (
    'fileHash' => '592e7f7d78c3fa986ac2c480a21f4e636ad55152',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Middleware\\ValidateGatewaySignature.php' => 
  array (
    'fileHash' => '3fa9ab3f0be48706999f9c43623f767e1745ad26',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateCustomerRequest.php' => 
  array (
    'fileHash' => '24d821f1e53bfa798421600109825495be1f570f',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateFacilityRequest.php' => 
  array (
    'fileHash' => 'f0fb45f6865166b415d2ccb4db85384fc4edfea9',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateGatewayRequest.php' => 
  array (
    'fileHash' => '5de5b9bea8f6c0bb97a7b07d7e488a2b36a74d15',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\GatewayController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateTrapRequest.php' => 
  array (
    'fileHash' => '9ed7958b2f9a175502cde2cc3e426e3f721e02ba',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\RegisterTrapEventRequest.php' => 
  array (
    'fileHash' => '53e7995b8649d078d5e692c6b039588d76c7f931',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapEventController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\UpdateCustomerRequest.php' => 
  array (
    'fileHash' => 'f967f68c18d6cd20429c59b3a0a383c3872fc04b',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\UpdateFacilityRequest.php' => 
  array (
    'fileHash' => 'c7af461cdeb08f91d33bc21d97649d39963c3afc',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerResource.php' => 
  array (
    'fileHash' => 'c924db3a3114168f37c7fafbe792f422f3305c11',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerWithFacilitiesResource.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerWithFacilitiesResource.php' => 
  array (
    'fileHash' => '73c7591992163b10dcf226b67cffbee3f4e408e6',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityResource.php' => 
  array (
    'fileHash' => 'a452de54585b5bf7506044dd4a714429ba0bc91a',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerWithFacilitiesResource.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityWithGatewaysResource.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityWithGatewaysResource.php' => 
  array (
    'fileHash' => '27703ff2907c5e6396ba40fed0682ed4324a70ae',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\GatewayResource.php' => 
  array (
    'fileHash' => '012cd33803cd0acbb8649f2da8bd9e84e3f18746',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\GatewayController.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityWithGatewaysResource.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapEventResource.php' => 
  array (
    'fileHash' => 'd6464eccc23e5dd6e94fd3491b76bb24b7b269d4',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapEventController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapResource.php' => 
  array (
    'fileHash' => '65d998f7647ad7e60d7c1a4657c7de688c03fd8c',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\GetCustomerQuery.php' => 
  array (
    'fileHash' => '47b7462931b034c2059486e72f2207c89f1393ae',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\GetFacilityQuery.php' => 
  array (
    'fileHash' => '481128a3fb9da9dc04a1cdb31197fdae323dee80',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\ListCustomersQuery.php' => 
  array (
    'fileHash' => '68c7aba0d3e35a4d90507fc37fbc29b62790bbc1',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\ListFacilitiesQuery.php' => 
  array (
    'fileHash' => 'dc75e4633d9bca449e7f38a36e0483c2bac594fb',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateCustomerUseCase.php' => 
  array (
    'fileHash' => 'df0b1f72f27969518d0ba0b376d1edaa75d778c6',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateFacilityUseCase.php' => 
  array (
    'fileHash' => 'a550ef4b87ccdd9c52670067d43c0b97679a2395',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteCustomerUseCase.php' => 
  array (
    'fileHash' => '1bdacb57348b16ad9bb57425e335c5bc809e85ff',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteFacilityUseCase.php' => 
  array (
    'fileHash' => 'f64e048b33737b24e46b06911d083df58dcde908',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateCustomerUseCase.php' => 
  array (
    'fileHash' => '49d91114bc6bdcece7b5084894eefa25c5c1dc2a',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateFacilityUseCase.php' => 
  array (
    'fileHash' => '26ab573bd8ddbd9691f17d9dea8a163a348fa5f6',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateGatewayUseCase.php' => 
  array (
    'fileHash' => 'bb7d215d524b42b4110725d170c49f0186595396',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\GatewayController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateTrapUseCase.php' => 
  array (
    'fileHash' => '756a8b5dd706b25427d24c9609519479d174a178',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\RegisterTrapEventUseCase.php' => 
  array (
    'fileHash' => '46b388841345e1ecafcf0fc49b537608180af417',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapEventController.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Customer.php' => 
  array (
    'fileHash' => 'fb995568162b23a146394cbc529e8655a0aae70d',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerResource.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerWithFacilitiesResource.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateCustomerUseCase.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateCustomerUseCase.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\CustomerRepositoryInterface.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentCustomerRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Facility.php' => 
  array (
    'fileHash' => '3d35a8d987f18e784b85a81527b0615e8c9cd76f',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerWithFacilitiesResource.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityResource.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityWithGatewaysResource.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateFacilityUseCase.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteFacilityUseCase.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateFacilityUseCase.php',
      8 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\FacilityRepositoryInterface.php',
      9 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
      10 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentFacilityRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Gateway.php' => 
  array (
    'fileHash' => 'd8cb2a6b3e8cc5ecc93f30bc193573a820807c19',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\GatewayController.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Middleware\\ValidateGatewaySignature.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityWithGatewaysResource.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\GatewayResource.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateGatewayUseCase.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateTrapUseCase.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\GatewayRepositoryInterface.php',
      8 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
      9 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentGatewayRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Trap.php' => 
  array (
    'fileHash' => '6ecbe7aea117476b9aafce64acc8e243a734e68c',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapResource.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateTrapUseCase.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\RegisterTrapEventUseCase.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\TrapRepositoryInterface.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\TrapEvent.php' => 
  array (
    'fileHash' => '5bef30f10b2dd6108763573b40d6dbc703fa6bfa',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapEventController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapEventResource.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\RegisterTrapEventUseCase.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\TrapEventRepositoryInterface.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapEventRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\CustomerStatus.php' => 
  array (
    'fileHash' => 'e3007a137b12177e157aa31182e598ac53ffb4a1',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateCustomerDTO.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\UpdateCustomerDTO.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateCustomerRequest.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\UpdateCustomerRequest.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerResource.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\ListCustomersQuery.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateCustomerUseCase.php',
      8 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateCustomerUseCase.php',
      9 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Customer.php',
      10 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\CustomerRepositoryInterface.php',
      11 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
      12 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer.php',
      13 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentCustomerRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\CustomerType.php' => 
  array (
    'fileHash' => '8160030f8905aa931e71b84ee6dd630f11f6260a',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateCustomerDTO.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\UpdateCustomerDTO.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateCustomerRequest.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\UpdateCustomerRequest.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerResource.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\ListCustomersQuery.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateCustomerUseCase.php',
      8 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateCustomerUseCase.php',
      9 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Customer.php',
      10 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\CustomerRepositoryInterface.php',
      11 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
      12 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer.php',
      13 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentCustomerRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\FacilityStatus.php' => 
  array (
    'fileHash' => '8cc9b9186885c70420e0ad1f9db03cf8b9fc00ce',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateFacilityDTO.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\UpdateFacilityDTO.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateFacilityRequest.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\UpdateFacilityRequest.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityResource.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\ListFacilitiesQuery.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateFacilityUseCase.php',
      8 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateFacilityUseCase.php',
      9 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Facility.php',
      10 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\FacilityRepositoryInterface.php',
      11 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
      12 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility.php',
      13 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentFacilityRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\FacilityType.php' => 
  array (
    'fileHash' => 'fec74133da799f1f984766071166984dca40a1bb',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateFacilityDTO.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\UpdateFacilityDTO.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateFacilityRequest.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\UpdateFacilityRequest.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityResource.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\ListFacilitiesQuery.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateFacilityUseCase.php',
      8 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateFacilityUseCase.php',
      9 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Facility.php',
      10 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\FacilityRepositoryInterface.php',
      11 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
      12 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility.php',
      13 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentFacilityRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\GatewayStatus.php' => 
  array (
    'fileHash' => '62ebe8256f1c6eef43a449974e1f4ca3c46ca0cd',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateGatewayDTO.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\GatewayController.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateGatewayRequest.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\GatewayResource.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteCustomerUseCase.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateGatewayUseCase.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Gateway.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\GatewayRepositoryInterface.php',
      8 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
      9 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway.php',
      10 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentGatewayRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\TrapStatus.php' => 
  array (
    'fileHash' => '5f8a02113150ce8e167ff765058811ba58db677a',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateTrapDTO.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapController.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateTrapRequest.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapResource.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteCustomerUseCase.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateTrapUseCase.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Trap.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\TrapRepositoryInterface.php',
      8 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
      9 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap.php',
      10 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\TrapType.php' => 
  array (
    'fileHash' => '6330f1d97805b5af767806dc149cbb95fea6592c',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateTrapDTO.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapController.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateTrapRequest.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapResource.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateTrapUseCase.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Trap.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\TrapRepositoryInterface.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
      8 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap.php',
      9 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\CustomerRepositoryInterface.php' => 
  array (
    'fileHash' => 'd6824d4f30efd1e9d394b6a59a5659703bcc8b37',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateCustomerUseCase.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateCustomerUseCase.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentCustomerRepository.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\DomainServiceProvider.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\FacilityRepositoryInterface.php' => 
  array (
    'fileHash' => '5e4d840207e24a2b349652f4690601fd1b42a2d6',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateFacilityUseCase.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteFacilityUseCase.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateFacilityUseCase.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentFacilityRepository.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\DomainServiceProvider.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\GatewayRepositoryInterface.php' => 
  array (
    'fileHash' => '1100d463a49fc22c9d5180c367e1cd05d76d86e2',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\GatewayController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Middleware\\ValidateGatewaySignature.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateGatewayUseCase.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateTrapUseCase.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentGatewayRepository.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\DomainServiceProvider.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\TrapEventRepositoryInterface.php' => 
  array (
    'fileHash' => '6f762a4058a8352cd29df5b656cdbeb190f3187c',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\RegisterTrapEventUseCase.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapEventRepository.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\DomainServiceProvider.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\TrapRepositoryInterface.php' => 
  array (
    'fileHash' => '9ddc4e072f185148386a8097f36675697e560fea',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateTrapUseCase.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\RegisterTrapEventUseCase.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapRepository.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\DomainServiceProvider.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\Address.php' => 
  array (
    'fileHash' => 'b5b633ddbfcf6ea8783a1d2f6a4ada484ca4af9b',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerResource.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityResource.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateCustomerUseCase.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateFacilityUseCase.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateCustomerUseCase.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateFacilityUseCase.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Customer.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Facility.php',
      8 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
      9 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\BatteryLevel.php' => 
  array (
    'fileHash' => 'f367291bdcefd1b1e835175af4802866a1ba9cd7',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapEventResource.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapResource.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\RegisterTrapEventUseCase.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Trap.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\TrapEvent.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\HardwareId.php' => 
  array (
    'fileHash' => '1a51e27fe661915c678085b0371671ac7943f778',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\GatewayResource.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapResource.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateGatewayUseCase.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateTrapUseCase.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Gateway.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Trap.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\Location.php' => 
  array (
    'fileHash' => '239ed98b734e62f7ed35a56937a3fa1362d43354',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\GatewayResource.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapResource.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateGatewayUseCase.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateTrapUseCase.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Gateway.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Trap.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\SignalStrength.php' => 
  array (
    'fileHash' => '1e1d393b9ccb8b096eec1ff7b1d1ce69f55dee46',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapEventResource.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\RegisterTrapEventUseCase.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\TrapEvent.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php' => 
  array (
    'fileHash' => 'd4e2e1ffb49ec3141eee058cee82c9c3f5f6b68c',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerResource.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentCustomerRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php' => 
  array (
    'fileHash' => 'cc3d6f4b1f8dbc4bf5d69b2b0a84ba870093d26a',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityResource.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentFacilityRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php' => 
  array (
    'fileHash' => '055624b98df875cb96e5493d3d3d3379d4f8fe63',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentGatewayRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php' => 
  array (
    'fileHash' => '80b5bd613b0f9716704054707e187f3646769875',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapEventRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php' => 
  array (
    'fileHash' => 'ac85a4dc95da6f31a52ada8e26e1dd0c4055a1a5',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer.php' => 
  array (
    'fileHash' => 'd02ea57f8a3b9d39e1f19dda6efd8ea62d9bbf9d',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerResource.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerWithFacilitiesResource.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\GetCustomerQuery.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\ListCustomersQuery.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteCustomerUseCase.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility.php',
      8 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentCustomerRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility.php' => 
  array (
    'fileHash' => '90e1a84ebae6f0e11e942822198ed1bbeba4a27f',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerWithFacilitiesResource.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityResource.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityWithGatewaysResource.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\GetFacilityQuery.php',
      6 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\ListFacilitiesQuery.php',
      7 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteCustomerUseCase.php',
      8 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php',
      9 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer.php',
      10 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway.php',
      11 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentFacilityRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway.php' => 
  array (
    'fileHash' => 'aa6c8fbc35044bd4cedb2cc14508144c54300f14',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteCustomerUseCase.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteFacilityUseCase.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap.php',
      5 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentGatewayRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap.php' => 
  array (
    'fileHash' => '81fc627e7fd9c5751ee1d468f062f84aa344023e',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteCustomerUseCase.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway.php',
      3 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrapEvent.php',
      4 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrapEvent.php' => 
  array (
    'fileHash' => 'cba4cd15bf99fa10f7c9d2f65147da8fddf9dcca',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php',
      1 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap.php',
      2 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapEventRepository.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentCustomerRepository.php' => 
  array (
    'fileHash' => '3d1af8c0f2c65985cec970075d8e69db9662f552',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\DomainServiceProvider.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentFacilityRepository.php' => 
  array (
    'fileHash' => '63cf4a50f25aab19123012c154bb5c868755f84a',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\DomainServiceProvider.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentGatewayRepository.php' => 
  array (
    'fileHash' => '9bf8031d1ba3a1b8319bb008a91b5adf71dcbc5e',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\DomainServiceProvider.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapEventRepository.php' => 
  array (
    'fileHash' => '978f1f09d25b6d7bc41792984d4dc1be2f546482',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\DomainServiceProvider.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapRepository.php' => 
  array (
    'fileHash' => 'ad432f5a0043c2ecb299aeeac480c26a6d81492e',
    'dependentFiles' => 
    array (
      0 => 'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\DomainServiceProvider.php',
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\AppServiceProvider.php' => 
  array (
    'fileHash' => '9caaab16d69dfdbd711e39c09a6c2f7fa6467eb3',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\DomainServiceProvider.php' => 
  array (
    'fileHash' => '8118a7e3c923843924053bf73af27ac03aef9555',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\EventServiceProvider.php' => 
  array (
    'fileHash' => 'd029ecf78a126089020f9b7d6a3722391a944609',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateCustomerDTO.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\DTOs\\CreateCustomerDTO',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'email',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'phone',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'billingAddress',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taxNumber',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notes',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromRequest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateFacilityDTO.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\DTOs\\CreateFacilityDTO',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'address',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactPerson',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactPhone',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\FacilityType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'area',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'description',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\FacilityStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customerId',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromRequest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateGatewayDTO.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\DTOs\\CreateGatewayDTO',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hardwareId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\GatewayStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromRequest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\CreateTrapDTO.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\DTOs\\CreateTrapDTO',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hardwareId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'gatewayId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\TrapType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\TrapStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromRequest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\TrapEventDTO.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\DTOs\\TrapEventDTO',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'caughtAt',
               'type' => 'DateTimeImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batteryLevel',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'rssi',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'metadata',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromRequest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\UpdateCustomerDTO.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\DTOs\\UpdateCustomerDTO',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'email',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'phone',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'billingAddress',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taxNumber',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notes',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromRequest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\DTOs\\UpdateFacilityDTO.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\DTOs\\UpdateFacilityDTO',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'address',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactPerson',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactPhone',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\FacilityType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'area',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'description',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\FacilityStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromRequest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\OpenApiSpec.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Controllers\\Api\\OpenApiSpec',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Info',
           'args' => 
          array (
            'version' => '\'1.0.0\'',
            'title' => '\'IoT Trap Monitoring System API\'',
            'description' => '\'API для системы мониторинга IoT ловушек для борьбы с вредителями. Включает управление шлюзами, ловушками и регистрацию событий срабатывания.\'',
            'contact' => 'new \\OpenApi\\Attributes\\Contact(email: \'support@trap-monitoring.local\')',
            'license' => 'new \\OpenApi\\Attributes\\License(name: \'MIT\')',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Server',
           'args' => 
          array (
            'url' => '\'http://127.0.0.1:3000/api\'',
            'description' => '\'Local Development Server\'',
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Server',
           'args' => 
          array (
            'url' => '\'https://api.trap-monitoring.local/api\'',
            'description' => '\'Production Server\'',
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\SecurityScheme',
           'args' => 
          array (
            'securityScheme' => '\'HmacSignature\'',
            'type' => '\'apiKey\'',
            'in' => '\'header\'',
            'name' => '\'X-Signature\'',
            'description' => '\'HMAC SHA-256 signature для защиты IoT endpoints. Используйте hash_hmac("sha256", payload, gateway_api_key)\'',
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Tag',
           'args' => 
          array (
            'name' => '\'Gateways\'',
            'description' => '\'Управление IoT шлюзами\'',
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Tag',
           'args' => 
          array (
            'name' => '\'Traps\'',
            'description' => '\'Управление ловушками для вредителей\'',
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Tag',
           'args' => 
          array (
            'name' => '\'Trap Events\'',
            'description' => '\'Регистрация событий срабатывания ловушек\'',
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Tag',
           'args' => 
          array (
            'name' => '\'Facilities\'',
            'description' => '\'Управление объектами/зданиями\'',
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Tag',
           'args' => 
          array (
            'name' => '\'Customers\'',
            'description' => '\'Управление клиентами\'',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\CustomerController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Controllers\\Api\\V1\\CustomerController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createCustomerUseCase',
               'type' => 'App\\Application\\Monitoring\\UseCases\\CreateCustomerUseCase',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'updateCustomerUseCase',
               'type' => 'App\\Application\\Monitoring\\UseCases\\UpdateCustomerUseCase',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'deleteCustomerUseCase',
               'type' => 'App\\Application\\Monitoring\\UseCases\\DeleteCustomerUseCase',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'getCustomerQuery',
               'type' => 'App\\Application\\Monitoring\\Queries\\GetCustomerQuery',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'listCustomersQuery',
               'type' => 'App\\Application\\Monitoring\\Queries\\ListCustomersQuery',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/customers\'',
                'summary' => '\'List all customers\'',
                'tags' => '[\'Customers\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'status\', in: \'query\', required: false, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', enum: [\'active\', \'inactive\'])), new \\OpenApi\\Attributes\\Parameter(name: \'type\', in: \'query\', required: false, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', enum: [\'individual\', \'company\']))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'List of customers\', content: new \\OpenApi\\Attributes\\JsonContent(type: \'array\', items: new \\OpenApi\\Attributes\\Items(ref: \'#/components/schemas/CustomerResource\')))]',
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Application\\Http\\Resources\\CustomerWithFacilitiesResource|Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/customers/{id}\'',
                'summary' => '\'Get customer by ID with facilities\'',
                'tags' => '[\'Customers\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'id\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', format: \'uuid\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Customer details with facilities\', content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/CustomerWithFacilitiesResource\')), new \\OpenApi\\Attributes\\Response(response: 404, description: \'Customer not found\')]',
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Application\\Http\\Requests\\CreateCustomerRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/api/v1/customers\'',
                'summary' => '\'Create a new customer\'',
                'tags' => '[\'Customers\']',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/CreateCustomerRequest\'))',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Customer created successfully\', content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/CustomerResource\')), new \\OpenApi\\Attributes\\Response(response: 422, description: \'Validation error\')]',
              ),
            )),
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Application\\Http\\Resources\\CustomerResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Application\\Http\\Requests\\UpdateCustomerRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Put',
               'args' => 
              array (
                'path' => '\'/api/v1/customers/{id}\'',
                'summary' => '\'Update customer\'',
                'tags' => '[\'Customers\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'id\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', format: \'uuid\'))]',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/UpdateCustomerRequest\'))',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Customer updated successfully\', content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/CustomerResource\')), new \\OpenApi\\Attributes\\Response(response: 404, description: \'Customer not found\'), new \\OpenApi\\Attributes\\Response(response: 422, description: \'Validation error\')]',
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Delete',
               'args' => 
              array (
                'path' => '\'/api/v1/customers/{id}\'',
                'summary' => '\'Delete customer (soft delete with cascade)\'',
                'description' => '\'Soft deletes the customer, all its facilities, and sets all gateways and traps to IN_STOCK status\'',
                'tags' => '[\'Customers\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'id\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', format: \'uuid\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 204, description: \'Customer deleted successfully\'), new \\OpenApi\\Attributes\\Response(response: 404, description: \'Customer not found\')]',
              ),
            )),
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'facilities',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/customers/{id}/facilities\'',
                'summary' => '\'List all facilities for a customer\'',
                'tags' => '[\'Customers\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'id\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', format: \'uuid\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'List of facilities\', content: new \\OpenApi\\Attributes\\JsonContent(type: \'array\', items: new \\OpenApi\\Attributes\\Items(ref: \'#/components/schemas/FacilityResource\')))]',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\FacilityController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Controllers\\Api\\V1\\FacilityController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createFacilityUseCase',
               'type' => 'App\\Application\\Monitoring\\UseCases\\CreateFacilityUseCase',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'updateFacilityUseCase',
               'type' => 'App\\Application\\Monitoring\\UseCases\\UpdateFacilityUseCase',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'deleteFacilityUseCase',
               'type' => 'App\\Application\\Monitoring\\UseCases\\DeleteFacilityUseCase',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'listFacilitiesQuery',
               'type' => 'App\\Application\\Monitoring\\Queries\\ListFacilitiesQuery',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'getFacilityQuery',
               'type' => 'App\\Application\\Monitoring\\Queries\\GetFacilityQuery',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/v1/facilities\'',
                'operationId' => '\'getFacilities\'',
                'summary' => '\'List facilities\'',
                'tags' => '[\'Facilities\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'status\', in: \'query\', schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', enum: [\'active\', \'inactive\'])), new \\OpenApi\\Attributes\\Parameter(name: \'type\', in: \'query\', schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', enum: [\'warehouse\', \'restaurant\', \'office\', \'retail\', \'industrial\']))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Success\', content: new \\OpenApi\\Attributes\\JsonContent(type: \'array\', items: new \\OpenApi\\Attributes\\Items(ref: \'#/components/schemas/FacilityResource\')))]',
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Application\\Http\\Resources\\FacilityWithGatewaysResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/v1/facilities/{id}\'',
                'operationId' => '\'getFacilityById\'',
                'summary' => '\'Get facility details\'',
                'tags' => '[\'Facilities\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'id\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', format: \'uuid\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Success\', content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/FacilityWithGatewaysResource\')), new \\OpenApi\\Attributes\\Response(response: 404, description: \'Not found\')]',
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Application\\Http\\Requests\\CreateFacilityRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/v1/facilities\'',
                'operationId' => '\'createFacility\'',
                'summary' => '\'Create facility\'',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/CreateFacilityRequest\'))',
                'tags' => '[\'Facilities\']',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Created\', content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/FacilityResource\'))]',
              ),
            )),
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Application\\Http\\Resources\\FacilityResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Application\\Http\\Requests\\UpdateFacilityRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Put',
               'args' => 
              array (
                'path' => '\'/v1/facilities/{id}\'',
                'operationId' => '\'updateFacility\'',
                'summary' => '\'Update facility\'',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/UpdateFacilityRequest\'))',
                'tags' => '[\'Facilities\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'id\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', format: \'uuid\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Updated\', content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/FacilityResource\'))]',
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Delete',
               'args' => 
              array (
                'path' => '\'/v1/facilities/{id}\'',
                'operationId' => '\'deleteFacility\'',
                'summary' => '\'Delete facility\'',
                'tags' => '[\'Facilities\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'id\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', format: \'uuid\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 204, description: \'Deleted\')]',
              ),
            )),
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'gateways',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/v1/facilities/{id}/gateways\'',
                'operationId' => '\'getFacilityGateways\'',
                'summary' => '\'Get facility gateways\'',
                'tags' => '[\'Facilities\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'id\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', format: \'uuid\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Success\', content: new \\OpenApi\\Attributes\\JsonContent(type: \'array\', items: new \\OpenApi\\Attributes\\Items(ref: \'#/components/schemas/GatewayResource\')))]',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\GatewayController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Controllers\\Api\\V1\\GatewayController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'gatewayRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\GatewayRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createGatewayUseCase',
               'type' => 'App\\Application\\UseCases\\CreateGatewayUseCase',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/v1/gateways\'',
                'operationId' => '\'getGateways\'',
                'description' => '\'Получить список всех IoT шлюзов с возможностью фильтрации по статусу\'',
                'summary' => '\'Список шлюзов\'',
                'tags' => '[\'Gateways\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'status\', description: \'Фильтр по статусу шлюза\', in: \'query\', required: false, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', enum: [\'online\', \'offline\', \'maintenance\']))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Успешный ответ\', content: new \\OpenApi\\Attributes\\JsonContent(type: \'array\', items: new \\OpenApi\\Attributes\\Items(ref: \'#/components/schemas/GatewayResource\')))]',
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Application\\Http\\Resources\\GatewayResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/v1/gateways/{id}\'',
                'operationId' => '\'getGatewayById\'',
                'description' => '\'Получить детальную информацию об IoT шлюзе по его ID\'',
                'summary' => '\'Детали шлюза\'',
                'tags' => '[\'Gateways\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'id\', description: \'UUID шлюза\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', format: \'uuid\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Успешный ответ\', content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/GatewayResource\')), new \\OpenApi\\Attributes\\Response(response: 404, description: \'Шлюз не найден\', content: new \\OpenApi\\Attributes\\JsonContent(properties: [new \\OpenApi\\Attributes\\Property(property: \'message\', type: \'string\', example: \'Gateway not found\')]))]',
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Application\\Http\\Requests\\CreateGatewayRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/v1/gateways\'',
                'operationId' => '\'createGateway\'',
                'description' => '\'Создать новый IoT шлюз в системе\'',
                'summary' => '\'Создать шлюз\'',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/CreateGatewayRequest\'))',
                'tags' => '[\'Gateways\']',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Шлюз успешно создан\', content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/GatewayResource\')), new \\OpenApi\\Attributes\\Response(response: 422, description: \'Ошибка валидации\', content: new \\OpenApi\\Attributes\\JsonContent(properties: [new \\OpenApi\\Attributes\\Property(property: \'message\', type: \'string\', example: \'The hardware id has already been taken.\'), new \\OpenApi\\Attributes\\Property(property: \'errors\', type: \'object\', example: [\'hardware_id\' => [\'The hardware id has already been taken.\']])]))]',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Controllers\\Api\\V1\\TrapController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\TrapRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createTrapUseCase',
               'type' => 'App\\Application\\UseCases\\CreateTrapUseCase',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\AnonymousResourceCollection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/v1/traps\'',
                'operationId' => '\'getTraps\'',
                'description' => '\'Получить список всех ловушек с возможностью фильтрации по статусу, типу или шлюзу\'',
                'summary' => '\'Список ловушек\'',
                'tags' => '[\'Traps\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'status\', description: \'Фильтр по статусу ловушки\', in: \'query\', required: false, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', enum: [\'active\', \'inactive\', \'maintenance\', \'faulty\'])), new \\OpenApi\\Attributes\\Parameter(name: \'type\', description: \'Фильтр по типу ловушки\', in: \'query\', required: false, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', enum: [\'rat\', \'mouse\', \'insect\'])), new \\OpenApi\\Attributes\\Parameter(name: \'gateway_id\', description: \'Фильтр по UUID шлюза\', in: \'query\', required: false, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', format: \'uuid\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Успешный ответ\', content: new \\OpenApi\\Attributes\\JsonContent(type: \'array\', items: new \\OpenApi\\Attributes\\Items(ref: \'#/components/schemas/TrapResource\')))]',
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Application\\Http\\Resources\\TrapResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/v1/traps/{id}\'',
                'operationId' => '\'getTrapById\'',
                'description' => '\'Получить детальную информацию о ловушке по её ID\'',
                'summary' => '\'Детали ловушки\'',
                'tags' => '[\'Traps\']',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'id\', description: \'UUID ловушки\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'string\', format: \'uuid\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Успешный ответ\', content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/TrapResource\')), new \\OpenApi\\Attributes\\Response(response: 404, description: \'Ловушка не найдена\', content: new \\OpenApi\\Attributes\\JsonContent(properties: [new \\OpenApi\\Attributes\\Property(property: \'message\', type: \'string\', example: \'Trap not found\')]))]',
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Application\\Http\\Requests\\CreateTrapRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/v1/traps\'',
                'operationId' => '\'createTrap\'',
                'description' => '\'Создать новую ловушку в системе\'',
                'summary' => '\'Создать ловушку\'',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/CreateTrapRequest\'))',
                'tags' => '[\'Traps\']',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Ловушка успешно создана\', content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/TrapResource\')), new \\OpenApi\\Attributes\\Response(response: 422, description: \'Ошибка валидации\', content: new \\OpenApi\\Attributes\\JsonContent(properties: [new \\OpenApi\\Attributes\\Property(property: \'message\', type: \'string\', example: \'The hardware id has already been taken.\'), new \\OpenApi\\Attributes\\Property(property: \'errors\', type: \'object\', example: [\'hardware_id\' => [\'The hardware id has already been taken.\']])]))]',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Controllers\\Api\\V1\\TrapEventController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Controllers\\Api\\V1\\TrapEventController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'registerTrapEventUseCase',
               'type' => 'App\\Application\\UseCases\\RegisterTrapEventUseCase',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Application\\Http\\Requests\\RegisterTrapEventRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/v1/trap-events\'',
                'operationId' => '\'registerTrapEvent\'',
                'description' => '\'Зарегистрировать событие срабатывания ловушки. Требует HMAC подпись в заголовке X-Signature для аутентификации IoT устройства.\'',
                'summary' => '\'Зарегистрировать событие ловушки\'',
                'security' => '[[\'HmacSignature\' => []]]',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/RegisterTrapEventRequest\'))',
                'tags' => '[\'Trap Events\']',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Событие успешно зарегистрировано\', content: new \\OpenApi\\Attributes\\JsonContent(ref: \'#/components/schemas/TrapEventResource\')), new \\OpenApi\\Attributes\\Response(response: 401, description: \'Неверная или отсутствующая HMAC подпись\', content: new \\OpenApi\\Attributes\\JsonContent(properties: [new \\OpenApi\\Attributes\\Property(property: \'message\', type: \'string\', example: \'Invalid signature\')])), new \\OpenApi\\Attributes\\Response(response: 422, description: \'Ошибка валидации\', content: new \\OpenApi\\Attributes\\JsonContent(properties: [new \\OpenApi\\Attributes\\Property(property: \'message\', type: \'string\', example: \'The trap id field is required.\'), new \\OpenApi\\Attributes\\Property(property: \'errors\', type: \'object\', example: [\'trap_id\' => [\'The trap id field is required.\']])]))]',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Middleware\\ValidateGatewaySignature.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Middleware\\ValidateGatewaySignature',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'gatewayRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\GatewayRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateCustomerRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Requests\\CreateCustomerRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'CreateCustomerRequest\'',
            'required' => '[\'name\', \'email\', \'phone\', \'type\', \'billing_address\']',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'name\', type: \'string\', maxLength: 255, example: \'ACME Corporation\'), new \\OpenApi\\Attributes\\Property(property: \'email\', type: \'string\', format: \'email\', example: \'info@acme.com\'), new \\OpenApi\\Attributes\\Property(property: \'phone\', type: \'string\', maxLength: 50, example: \'+380501234567\'), new \\OpenApi\\Attributes\\Property(property: \'type\', type: \'string\', enum: [\'individual\', \'company\'], example: \'company\'), new \\OpenApi\\Attributes\\Property(property: \'billing_address\', type: \'object\', required: [\'street\', \'city\', \'postal_code\', \'country\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'street\', type: \'string\', example: \'123 Business Ave\'), new \\OpenApi\\Attributes\\Property(property: \'city\', type: \'string\', example: \'Kyiv\'), new \\OpenApi\\Attributes\\Property(property: \'postal_code\', type: \'string\', example: \'01001\'), new \\OpenApi\\Attributes\\Property(property: \'country\', type: \'string\', example: \'Ukraine\')]), new \\OpenApi\\Attributes\\Property(property: \'tax_number\', type: \'string\', nullable: true, example: \'1234567890\'), new \\OpenApi\\Attributes\\Property(property: \'notes\', type: \'string\', nullable: true, example: \'Premium customer\'), new \\OpenApi\\Attributes\\Property(property: \'status\', type: \'string\', enum: [\'active\', \'inactive\'], nullable: true, example: \'active\')]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateFacilityRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Requests\\CreateFacilityRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'CreateFacilityRequest\'',
            'required' => '[\'name\', \'address\', \'contact_person\', \'contact_phone\', \'type\', \'area\']',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'name\', type: \'string\', maxLength: 255, example: \'Main Warehouse\'), new \\OpenApi\\Attributes\\Property(property: \'address\', type: \'object\', required: [\'street\', \'city\', \'postal_code\', \'country\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'street\', type: \'string\', example: \'123 Main Street\'), new \\OpenApi\\Attributes\\Property(property: \'city\', type: \'string\', example: \'Kyiv\'), new \\OpenApi\\Attributes\\Property(property: \'postal_code\', type: \'string\', example: \'01001\'), new \\OpenApi\\Attributes\\Property(property: \'country\', type: \'string\', example: \'Ukraine\')]), new \\OpenApi\\Attributes\\Property(property: \'contact_person\', type: \'string\', example: \'John Doe\'), new \\OpenApi\\Attributes\\Property(property: \'contact_phone\', type: \'string\', example: \'+380501234567\'), new \\OpenApi\\Attributes\\Property(property: \'type\', type: \'string\', enum: [\'warehouse\', \'restaurant\', \'office\', \'retail\', \'industrial\'], example: \'warehouse\'), new \\OpenApi\\Attributes\\Property(property: \'area\', type: \'number\', format: \'float\', minimum: 0, example: 1500.5), new \\OpenApi\\Attributes\\Property(property: \'description\', type: \'string\', nullable: true, example: \'Main distribution center\'), new \\OpenApi\\Attributes\\Property(property: \'status\', type: \'string\', enum: [\'active\', \'inactive\'], nullable: true, example: \'active\'), new \\OpenApi\\Attributes\\Property(property: \'customer_id\', type: \'string\', format: \'uuid\', nullable: true, example: \'01963e34-e7bc-7890-b23c-000000000001\')]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateGatewayRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Requests\\CreateGatewayRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'CreateGatewayRequest\'',
            'required' => '[\'hardware_id\', \'name\']',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'hardware_id\', description: \'Уникальный идентификатор оборудования шлюза\', type: \'string\', maxLength: 255, example: \'GW-001-ABC123\'), new \\OpenApi\\Attributes\\Property(property: \'name\', description: \'Название шлюза\', type: \'string\', maxLength: 255, example: \'Gateway Floor 1\'), new \\OpenApi\\Attributes\\Property(property: \'status\', description: \'Статус шлюза\', type: \'string\', enum: [\'online\', \'offline\', \'maintenance\'], nullable: true, example: \'online\'), new \\OpenApi\\Attributes\\Property(property: \'location\', description: \'Географическое расположение шлюза\', type: \'object\', nullable: true, properties: [new \\OpenApi\\Attributes\\Property(property: \'latitude\', type: \'number\', format: \'float\', minimum: -90, maximum: 90, example: 50.4501), new \\OpenApi\\Attributes\\Property(property: \'longitude\', type: \'number\', format: \'float\', minimum: -180, maximum: 180, example: 30.5234)])]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\CreateTrapRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Requests\\CreateTrapRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'CreateTrapRequest\'',
            'required' => '[\'hardware_id\', \'gateway_id\', \'name\', \'type\']',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'hardware_id\', description: \'Уникальный идентификатор оборудования ловушки\', type: \'string\', maxLength: 255, example: \'TRAP-001-XYZ789\'), new \\OpenApi\\Attributes\\Property(property: \'gateway_id\', description: \'UUID шлюза, к которому подключена ловушка\', type: \'string\', format: \'uuid\', example: \'9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c\'), new \\OpenApi\\Attributes\\Property(property: \'name\', description: \'Название ловушки\', type: \'string\', maxLength: 255, example: \'Trap Kitchen Area\'), new \\OpenApi\\Attributes\\Property(property: \'type\', description: \'Тип ловушки\', type: \'string\', enum: [\'rat\', \'mouse\', \'insect\'], example: \'rat\'), new \\OpenApi\\Attributes\\Property(property: \'status\', description: \'Статус ловушки\', type: \'string\', enum: [\'active\', \'inactive\', \'maintenance\', \'faulty\'], nullable: true, example: \'active\'), new \\OpenApi\\Attributes\\Property(property: \'location\', description: \'Географическое расположение ловушки\', type: \'object\', nullable: true, properties: [new \\OpenApi\\Attributes\\Property(property: \'latitude\', type: \'number\', format: \'float\', minimum: -90, maximum: 90, example: 50.4501), new \\OpenApi\\Attributes\\Property(property: \'longitude\', type: \'number\', format: \'float\', minimum: -180, maximum: 180, example: 30.5234)])]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\RegisterTrapEventRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Requests\\RegisterTrapEventRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'RegisterTrapEventRequest\'',
            'required' => '[\'trap_id\', \'timestamp\', \'metadata\']',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'trap_id\', description: \'UUID ловушки, которая сработала\', type: \'string\', format: \'uuid\', example: \'9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c\'), new \\OpenApi\\Attributes\\Property(property: \'timestamp\', description: \'Unix timestamp события срабатывания\', type: \'integer\', minimum: 0, example: 1704067200), new \\OpenApi\\Attributes\\Property(property: \'metadata\', description: \'Метаданные события\', type: \'object\', required: [\'battery_level\', \'rssi\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'battery_level\', description: \'Уровень заряда батареи в процентах\', type: \'integer\', minimum: 0, maximum: 100, example: 85), new \\OpenApi\\Attributes\\Property(property: \'rssi\', description: \'Мощность сигнала в dBm\', type: \'integer\', minimum: -120, maximum: 0, example: -65)])]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\UpdateCustomerRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Requests\\UpdateCustomerRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'UpdateCustomerRequest\'',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'name\', type: \'string\', maxLength: 255, example: \'ACME Corporation\'), new \\OpenApi\\Attributes\\Property(property: \'email\', type: \'string\', format: \'email\', example: \'info@acme.com\'), new \\OpenApi\\Attributes\\Property(property: \'phone\', type: \'string\', maxLength: 50, example: \'+380501234567\'), new \\OpenApi\\Attributes\\Property(property: \'type\', type: \'string\', enum: [\'individual\', \'company\'], example: \'company\'), new \\OpenApi\\Attributes\\Property(property: \'billing_address\', type: \'object\', required: [\'street\', \'city\', \'postal_code\', \'country\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'street\', type: \'string\', example: \'123 Business Ave\'), new \\OpenApi\\Attributes\\Property(property: \'city\', type: \'string\', example: \'Kyiv\'), new \\OpenApi\\Attributes\\Property(property: \'postal_code\', type: \'string\', example: \'01001\'), new \\OpenApi\\Attributes\\Property(property: \'country\', type: \'string\', example: \'Ukraine\')]), new \\OpenApi\\Attributes\\Property(property: \'tax_number\', type: \'string\', nullable: true, example: \'1234567890\'), new \\OpenApi\\Attributes\\Property(property: \'notes\', type: \'string\', nullable: true, example: \'Premium customer\'), new \\OpenApi\\Attributes\\Property(property: \'status\', type: \'string\', enum: [\'active\', \'inactive\'], example: \'active\')]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Requests\\UpdateFacilityRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Requests\\UpdateFacilityRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'UpdateFacilityRequest\'',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'name\', type: \'string\', maxLength: 255, example: \'Main Warehouse\'), new \\OpenApi\\Attributes\\Property(property: \'address\', type: \'object\', required: [\'street\', \'city\', \'postal_code\', \'country\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'street\', type: \'string\', example: \'123 Main Street\'), new \\OpenApi\\Attributes\\Property(property: \'city\', type: \'string\', example: \'Kyiv\'), new \\OpenApi\\Attributes\\Property(property: \'postal_code\', type: \'string\', example: \'01001\'), new \\OpenApi\\Attributes\\Property(property: \'country\', type: \'string\', example: \'Ukraine\')]), new \\OpenApi\\Attributes\\Property(property: \'contact_person\', type: \'string\', example: \'John Doe\'), new \\OpenApi\\Attributes\\Property(property: \'contact_phone\', type: \'string\', example: \'+380501234567\'), new \\OpenApi\\Attributes\\Property(property: \'type\', type: \'string\', enum: [\'warehouse\', \'restaurant\', \'office\', \'retail\', \'industrial\'], example: \'warehouse\'), new \\OpenApi\\Attributes\\Property(property: \'area\', type: \'number\', format: \'float\', minimum: 0, example: 1500.5), new \\OpenApi\\Attributes\\Property(property: \'description\', type: \'string\', nullable: true, example: \'Main distribution center\'), new \\OpenApi\\Attributes\\Property(property: \'status\', type: \'string\', enum: [\'active\', \'inactive\'], example: \'active\')]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Resources\\CustomerResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property Customer|EloquentCustomer $resource
 */',
         'namespace' => 'App\\Application\\Http\\Resources',
         'uses' => 
        array (
          'customer' => 'App\\Domain\\Monitoring\\Entities\\Customer',
          'customermapper' => 'App\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper',
          'eloquentcustomer' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer',
          'datetimeinterface' => 'DateTimeInterface',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
          'oa' => 'OpenApi\\Attributes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'CustomerResource\'',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'id\', type: \'string\', format: \'uuid\'), new \\OpenApi\\Attributes\\Property(property: \'name\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'email\', type: \'string\', format: \'email\'), new \\OpenApi\\Attributes\\Property(property: \'phone\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'type\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'billing_address\', type: \'object\', properties: [new \\OpenApi\\Attributes\\Property(property: \'street\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'city\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'postal_code\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'country\', type: \'string\')]), new \\OpenApi\\Attributes\\Property(property: \'tax_number\', type: \'string\', nullable: true), new \\OpenApi\\Attributes\\Property(property: \'notes\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'status\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'is_active\', type: \'boolean\'), new \\OpenApi\\Attributes\\Property(property: \'created_at\', type: \'string\', format: \'date-time\'), new \\OpenApi\\Attributes\\Property(property: \'updated_at\', type: \'string\', format: \'date-time\')]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\CustomerWithFacilitiesResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Resources\\CustomerWithFacilitiesResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'CustomerWithFacilitiesResource\'',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'customer\', ref: \'#/components/schemas/CustomerResource\'), new \\OpenApi\\Attributes\\Property(property: \'facilities\', type: \'array\', items: new \\OpenApi\\Attributes\\Items(ref: \'#/components/schemas/FacilityResource\')), new \\OpenApi\\Attributes\\Property(property: \'facilities_count\', type: \'integer\')]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Resources\\FacilityResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property Facility|EloquentFacility $resource
 */',
         'namespace' => 'App\\Application\\Http\\Resources',
         'uses' => 
        array (
          'facility' => 'App\\Domain\\Monitoring\\Entities\\Facility',
          'facilitymapper' => 'App\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper',
          'eloquentfacility' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility',
          'datetimeinterface' => 'DateTimeInterface',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
          'oa' => 'OpenApi\\Attributes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'FacilityResource\'',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'id\', type: \'string\', format: \'uuid\'), new \\OpenApi\\Attributes\\Property(property: \'name\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'address\', type: \'object\', properties: [new \\OpenApi\\Attributes\\Property(property: \'street\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'city\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'postal_code\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'country\', type: \'string\')]), new \\OpenApi\\Attributes\\Property(property: \'contact_person\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'contact_phone\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'type\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'area\', type: \'number\', format: \'float\'), new \\OpenApi\\Attributes\\Property(property: \'description\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'status\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'is_active\', type: \'boolean\'), new \\OpenApi\\Attributes\\Property(property: \'created_at\', type: \'string\', format: \'date-time\'), new \\OpenApi\\Attributes\\Property(property: \'updated_at\', type: \'string\', format: \'date-time\')]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\FacilityWithGatewaysResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Resources\\FacilityWithGatewaysResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'FacilityWithGatewaysResource\'',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'facility\', ref: \'#/components/schemas/FacilityResource\'), new \\OpenApi\\Attributes\\Property(property: \'gateways\', type: \'array\', items: new \\OpenApi\\Attributes\\Items(ref: \'#/components/schemas/GatewayResource\')), new \\OpenApi\\Attributes\\Property(property: \'gateway_count\', type: \'integer\')]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\GatewayResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Resources\\GatewayResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property Gateway $resource
 */',
         'namespace' => 'App\\Application\\Http\\Resources',
         'uses' => 
        array (
          'gateway' => 'App\\Domain\\Monitoring\\Entities\\Gateway',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
          'oa' => 'OpenApi\\Attributes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'GatewayResource\'',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'id\', description: \'UUID шлюза\', type: \'string\', format: \'uuid\', example: \'9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c\'), new \\OpenApi\\Attributes\\Property(property: \'hardware_id\', description: \'Идентификатор оборудования\', type: \'string\', example: \'GW-001-ABC123\'), new \\OpenApi\\Attributes\\Property(property: \'name\', description: \'Название шлюза\', type: \'string\', example: \'Gateway Floor 1\'), new \\OpenApi\\Attributes\\Property(property: \'location\', description: \'Координаты расположения\', type: \'object\', properties: [new \\OpenApi\\Attributes\\Property(property: \'latitude\', type: \'number\', format: \'float\', example: 50.4501), new \\OpenApi\\Attributes\\Property(property: \'longitude\', type: \'number\', format: \'float\', example: 30.5234)]), new \\OpenApi\\Attributes\\Property(property: \'status\', description: \'Статус шлюза\', type: \'string\', enum: [\'online\', \'offline\', \'maintenance\'], example: \'online\'), new \\OpenApi\\Attributes\\Property(property: \'is_online\', description: \'Онлайн статус\', type: \'boolean\', example: true), new \\OpenApi\\Attributes\\Property(property: \'last_seen_at\', description: \'Время последней активности\', type: \'string\', format: \'date-time\', example: \'2024-01-01T12:00:00+00:00\'), new \\OpenApi\\Attributes\\Property(property: \'created_at\', description: \'Дата создания\', type: \'string\', format: \'date-time\', example: \'2024-01-01T10:00:00+00:00\'), new \\OpenApi\\Attributes\\Property(property: \'updated_at\', description: \'Дата обновления\', type: \'string\', format: \'date-time\', example: \'2024-01-01T12:00:00+00:00\')]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapEventResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Resources\\TrapEventResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property TrapEvent $resource
 */',
         'namespace' => 'App\\Application\\Http\\Resources',
         'uses' => 
        array (
          'trapevent' => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
          'oa' => 'OpenApi\\Attributes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'TrapEventResource\'',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'id\', description: \'UUID события\', type: \'string\', format: \'uuid\', example: \'9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c\'), new \\OpenApi\\Attributes\\Property(property: \'trap_id\', description: \'UUID ловушки\', type: \'string\', format: \'uuid\', example: \'9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c\'), new \\OpenApi\\Attributes\\Property(property: \'caught_at\', description: \'Время срабатывания\', type: \'string\', format: \'date-time\', example: \'2024-01-01T12:00:00+00:00\'), new \\OpenApi\\Attributes\\Property(property: \'battery_level\', description: \'Уровень заряда батареи (%)\', type: \'integer\', minimum: 0, maximum: 100, example: 85), new \\OpenApi\\Attributes\\Property(property: \'rssi\', description: \'Мощность сигнала (dBm)\', type: \'integer\', minimum: -120, maximum: 0, example: -65), new \\OpenApi\\Attributes\\Property(property: \'signal_quality\', description: \'Качество сигнала\', type: \'string\', enum: [\'excellent\', \'good\', \'fair\', \'weak\'], example: \'good\'), new \\OpenApi\\Attributes\\Property(property: \'has_weak_signal\', description: \'Слабый сигнал\', type: \'boolean\', example: false), new \\OpenApi\\Attributes\\Property(property: \'metadata\', description: \'Дополнительные метаданные\', type: \'object\', example: [\'battery_level\' => 85, \'rssi\' => -65]), new \\OpenApi\\Attributes\\Property(property: \'created_at\', description: \'Дата создания записи\', type: \'string\', format: \'date-time\', example: \'2024-01-01T12:00:01+00:00\')]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Http\\Resources\\TrapResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Http\\Resources\\TrapResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property Trap $resource
 */',
         'namespace' => 'App\\Application\\Http\\Resources',
         'uses' => 
        array (
          'trap' => 'App\\Domain\\Monitoring\\Entities\\Trap',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
          'oa' => 'OpenApi\\Attributes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Schema',
           'args' => 
          array (
            'schema' => '\'TrapResource\'',
            'properties' => '[new \\OpenApi\\Attributes\\Property(property: \'id\', description: \'UUID ловушки\', type: \'string\', format: \'uuid\', example: \'9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c\'), new \\OpenApi\\Attributes\\Property(property: \'hardware_id\', description: \'Идентификатор оборудования\', type: \'string\', example: \'TRAP-001-XYZ789\'), new \\OpenApi\\Attributes\\Property(property: \'gateway_id\', description: \'UUID шлюза\', type: \'string\', format: \'uuid\', example: \'9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c\'), new \\OpenApi\\Attributes\\Property(property: \'name\', description: \'Название ловушки\', type: \'string\', example: \'Trap Kitchen Area\'), new \\OpenApi\\Attributes\\Property(property: \'type\', description: \'Тип ловушки\', type: \'string\', enum: [\'rat\', \'mouse\', \'insect\'], example: \'rat\'), new \\OpenApi\\Attributes\\Property(property: \'status\', description: \'Статус ловушки\', type: \'string\', enum: [\'active\', \'inactive\', \'maintenance\', \'faulty\'], example: \'active\'), new \\OpenApi\\Attributes\\Property(property: \'location\', description: \'Координаты расположения\', type: \'object\', properties: [new \\OpenApi\\Attributes\\Property(property: \'latitude\', type: \'number\', format: \'float\', example: 50.4501), new \\OpenApi\\Attributes\\Property(property: \'longitude\', type: \'number\', format: \'float\', example: 30.5234)]), new \\OpenApi\\Attributes\\Property(property: \'battery_level\', description: \'Уровень заряда батареи (%)\', type: \'integer\', minimum: 0, maximum: 100, example: 85), new \\OpenApi\\Attributes\\Property(property: \'is_low_battery\', description: \'Низкий заряд батареи\', type: \'boolean\', example: false), new \\OpenApi\\Attributes\\Property(property: \'is_operational\', description: \'Операционный статус\', type: \'boolean\', example: true), new \\OpenApi\\Attributes\\Property(property: \'total_catches\', description: \'Общее количество срабатываний\', type: \'integer\', minimum: 0, example: 42), new \\OpenApi\\Attributes\\Property(property: \'last_event_at\', description: \'Время последнего события\', type: \'string\', format: \'date-time\', nullable: true, example: \'2024-01-01T12:00:00+00:00\'), new \\OpenApi\\Attributes\\Property(property: \'created_at\', description: \'Дата создания\', type: \'string\', format: \'date-time\', example: \'2024-01-01T10:00:00+00:00\'), new \\OpenApi\\Attributes\\Property(property: \'updated_at\', description: \'Дата обновления\', type: \'string\', format: \'date-time\', example: \'2024-01-01T12:00:00+00:00\'), new \\OpenApi\\Attributes\\Property(property: \'deleted_at\', description: \'Дата удаления\', type: \'string\', format: \'date-time\', nullable: true, example: null)]',
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\GetCustomerQuery.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Monitoring\\Queries\\GetCustomerQuery',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\GetFacilityQuery.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Monitoring\\Queries\\GetFacilityQuery',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\ListCustomersQuery.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Monitoring\\Queries\\ListCustomersQuery',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => '?App\\Domain\\Monitoring\\Enums\\CustomerStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => '?App\\Domain\\Monitoring\\Enums\\CustomerType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\Queries\\ListFacilitiesQuery.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Monitoring\\Queries\\ListFacilitiesQuery',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => '?App\\Domain\\Monitoring\\Enums\\FacilityStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => '?App\\Domain\\Monitoring\\Enums\\FacilityType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateCustomerUseCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Monitoring\\UseCases\\CreateCustomerUseCase',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customerRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\CustomerRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Entities\\Customer',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dto',
               'type' => 'App\\Application\\DTOs\\CreateCustomerDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\CreateFacilityUseCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Monitoring\\UseCases\\CreateFacilityUseCase',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'facilityRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\FacilityRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Entities\\Facility',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dto',
               'type' => 'App\\Application\\DTOs\\CreateFacilityDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteCustomerUseCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Monitoring\\UseCases\\DeleteCustomerUseCase',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customerId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\DeleteFacilityUseCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Monitoring\\UseCases\\DeleteFacilityUseCase',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'facilityRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\FacilityRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateCustomerUseCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Monitoring\\UseCases\\UpdateCustomerUseCase',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customerRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\CustomerRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Entities\\Customer',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dto',
               'type' => 'App\\Application\\DTOs\\UpdateCustomerDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\Monitoring\\UseCases\\UpdateFacilityUseCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Monitoring\\UseCases\\UpdateFacilityUseCase',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'facilityRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\FacilityRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Entities\\Facility',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dto',
               'type' => 'App\\Application\\DTOs\\UpdateFacilityDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateGatewayUseCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\UseCases\\CreateGatewayUseCase',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'gatewayRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\GatewayRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Entities\\Gateway',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dto',
               'type' => 'App\\Application\\DTOs\\CreateGatewayDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\CreateTrapUseCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\UseCases\\CreateTrapUseCase',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\TrapRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'gatewayRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\GatewayRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Entities\\Trap',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dto',
               'type' => 'App\\Application\\DTOs\\CreateTrapDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Application\\UseCases\\RegisterTrapEventUseCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\UseCases\\RegisterTrapEventUseCase',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\TrapRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapEventRepository',
               'type' => 'App\\Domain\\Monitoring\\Repositories\\TrapEventRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dto',
               'type' => 'App\\Application\\DTOs\\TrapEventDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Customer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Entities\\Customer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'email',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'phone',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'billingAddress',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taxNumber',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notes',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromPrimitives',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'email',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'phone',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'billingAddress',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taxNumber',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notes',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            9 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createdAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            10 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'updatedAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            11 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'deletedAt',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'activate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deactivate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'email',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'phone',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'billingAddress',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taxNumber',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notes',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isActive',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'id',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'name',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'email',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'phone',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'type',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'billingAddress',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'taxNumber',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'notes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'status',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createdAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updatedAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deletedAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Facility.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Entities\\Facility',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'address',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactPerson',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactPhone',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\FacilityType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'area',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'description',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customerId',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromPrimitives',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'address',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactPerson',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactPhone',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'area',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'description',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            9 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createdAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            10 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'updatedAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            11 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'deletedAt',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            12 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customerId',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'activate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deactivate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'address',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactPerson',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contactPhone',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\FacilityType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'area',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'description',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isActive',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'id',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'name',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'address',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'contactPerson',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'contactPhone',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'type',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Enums\\FacilityType',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'area',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'description',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'status',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Enums\\FacilityStatus',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createdAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updatedAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deletedAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'customerId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Gateway.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Entities\\Gateway',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hardwareId',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\HardwareId',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'apiKey',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\Location',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'facilityId',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromPrimitives',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hardwareId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'apiKey',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lastSeenAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createdAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'updatedAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            9 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'facilityId',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validateSignature',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'payload',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'signature',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateLastSeen',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\GatewayStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isOnline',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'id',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hardwareId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\ValueObjects\\HardwareId',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'apiKey',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'name',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'location',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\ValueObjects\\Location',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'status',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Enums\\GatewayStatus',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lastSeenAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createdAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updatedAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'facilityId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\Trap.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Entities\\Trap',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hardwareId',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\HardwareId',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'gatewayId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\TrapType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\Location',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromPrimitives',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hardwareId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'gatewayId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batteryLevel',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'totalCatches',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            9 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lastEventAt',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            10 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createdAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            11 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'updatedAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            12 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'deletedAt',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'trigger',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'at',
               'type' => 'DateTimeImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batteryLevel',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\BatteryLevel',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\TrapStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateBatteryLevel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batteryLevel',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\BatteryLevel',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isLowBattery',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isOperational',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'markAsDeleted',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'id',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hardwareId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\ValueObjects\\HardwareId',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'gatewayId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'name',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'type',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Enums\\TrapType',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'status',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\Enums\\TrapStatus',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'location',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\ValueObjects\\Location',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'batteryLevel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\ValueObjects\\BatteryLevel',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'totalCatches',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lastEventAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createdAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updatedAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deletedAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Entities\\TrapEvent.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'caughtAt',
               'type' => 'DateTimeImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batteryLevel',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\BatteryLevel',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'signalStrength',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\SignalStrength',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'metadata',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromPrimitives',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'caughtAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batteryLevel',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'rssi',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'metadata',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createdAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hasWeakSignal',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'id',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'trapId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'caughtAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'batteryLevel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\ValueObjects\\BatteryLevel',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'signalStrength',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Domain\\Monitoring\\ValueObjects\\SignalStrength',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'metadata',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createdAt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DateTimeImmutable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\CustomerStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ACTIVE',
           'value' => '\'active\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'INACTIVE',
           'value' => '\'inactive\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'label',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isActive',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\CustomerType.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'INDIVIDUAL',
           'value' => '\'individual\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'COMPANY',
           'value' => '\'company\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'label',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\FacilityStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Enums\\FacilityStatus',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ACTIVE',
           'value' => '\'active\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'INACTIVE',
           'value' => '\'inactive\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'label',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isActive',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\FacilityType.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Enums\\FacilityType',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'WAREHOUSE',
           'value' => '\'warehouse\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'RESTAURANT',
           'value' => '\'restaurant\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'OFFICE',
           'value' => '\'office\'',
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'RETAIL',
           'value' => '\'retail\'',
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'INDUSTRIAL',
           'value' => '\'industrial\'',
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'label',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\GatewayStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Enums\\GatewayStatus',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ONLINE',
           'value' => '\'online\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'OFFLINE',
           'value' => '\'offline\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'MAINTENANCE',
           'value' => '\'maintenance\'',
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'IN_STOCK',
           'value' => '\'in_stock\'',
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'label',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isAvailable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\TrapStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Enums\\TrapStatus',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ACTIVE',
           'value' => '\'active\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'INACTIVE',
           'value' => '\'inactive\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'MAINTENANCE',
           'value' => '\'maintenance\'',
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'FAULTY',
           'value' => '\'faulty\'',
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'IN_STOCK',
           'value' => '\'in_stock\'',
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'label',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isOperational',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Enums\\TrapType.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Enums\\TrapType',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'RAT',
           'value' => '\'rat\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'MOUSE',
           'value' => '\'mouse\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'INSECT',
           'value' => '\'insect\'',
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'label',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\CustomerRepositoryInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Repositories\\CustomerRepositoryInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customer',
               'type' => 'App\\Domain\\Monitoring\\Entities\\Customer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Customer',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAll',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<Customer>
     */',
             'namespace' => 'App\\Domain\\Monitoring\\Repositories',
             'uses' => 
            array (
              'customer' => 'App\\Domain\\Monitoring\\Entities\\Customer',
              'customerstatus' => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
              'customertype' => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByStatus',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<Customer>
     */',
             'namespace' => 'App\\Domain\\Monitoring\\Repositories',
             'uses' => 
            array (
              'customer' => 'App\\Domain\\Monitoring\\Entities\\Customer',
              'customerstatus' => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
              'customertype' => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByType',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<Customer>
     */',
             'namespace' => 'App\\Domain\\Monitoring\\Repositories',
             'uses' => 
            array (
              'customer' => 'App\\Domain\\Monitoring\\Entities\\Customer',
              'customerstatus' => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
              'customertype' => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nextIdentity',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\FacilityRepositoryInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Repositories\\FacilityRepositoryInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'facility',
               'type' => 'App\\Domain\\Monitoring\\Entities\\Facility',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Facility',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\FacilityStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByType',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\FacilityType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nextIdentity',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\GatewayRepositoryInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Repositories\\GatewayRepositoryInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'gateway',
               'type' => 'App\\Domain\\Monitoring\\Entities\\Gateway',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Gateway',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByHardwareId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Gateway',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hardwareId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByApiKey',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Gateway',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'apiKey',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\GatewayStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nextIdentity',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\TrapEventRepositoryInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Repositories\\TrapEventRepositoryInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\TrapEvent',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByTrapId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByDateRange',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'from',
               'type' => 'DateTimeImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'to',
               'type' => 'DateTimeImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findRecent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'countByTrapId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nextIdentity',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\Repositories\\TrapRepositoryInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\Repositories\\TrapRepositoryInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trap',
               'type' => 'App\\Domain\\Monitoring\\Entities\\Trap',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Trap',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByHardwareId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Trap',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hardwareId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByGatewayId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'gatewayId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\TrapStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByType',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\TrapType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findLowBattery',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'threshold',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nextIdentity',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\Address.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\ValueObjects\\Address',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'street',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'city',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'postalCode',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'country',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'street',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'city',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'postalCode',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'country',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fullAddress',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'equals',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'other',
               'type' => 'self',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\BatteryLevel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\ValueObjects\\BatteryLevel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'value',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isLow',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isCritical',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\HardwareId.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\ValueObjects\\HardwareId',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'value',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'equals',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'other',
               'type' => 'App\\Domain\\Monitoring\\ValueObjects\\HardwareId',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\Location.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\ValueObjects\\Location',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'latitude',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'longitude',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'latitude',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'longitude',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Domain\\Monitoring\\ValueObjects\\SignalStrength.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Domain\\Monitoring\\ValueObjects\\SignalStrength',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'rssi',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rssi',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isWeak',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'quality',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Mappers\\CustomerMapper',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toDomain',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Domain\\Monitoring\\Entities\\Customer',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eloquent',
               'type' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toEloquent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customer',
               'type' => 'App\\Domain\\Monitoring\\Entities\\Customer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eloquent',
               'type' => '?App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Mappers\\FacilityMapper',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toDomain',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Domain\\Monitoring\\Entities\\Facility',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eloquent',
               'type' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toEloquent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'facility',
               'type' => 'App\\Domain\\Monitoring\\Entities\\Facility',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eloquent',
               'type' => '?App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Mappers\\GatewayMapper',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toDomain',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Domain\\Monitoring\\Entities\\Gateway',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eloquent',
               'type' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toEloquent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'gateway',
               'type' => 'App\\Domain\\Monitoring\\Entities\\Gateway',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eloquent',
               'type' => '?App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapEventMapper',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toDomain',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eloquent',
               'type' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrapEvent',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toEloquent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrapEvent',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eloquent',
               'type' => '?App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrapEvent',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Mappers\\TrapMapper',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toDomain',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Domain\\Monitoring\\Entities\\Trap',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eloquent',
               'type' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toEloquent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trap',
               'type' => 'App\\Domain\\Monitoring\\Entities\\Trap',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eloquent',
               'type' => '?App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentCustomer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUuids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newUniqueId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'facilities',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentFacility',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUuids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newUniqueId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'gateways',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'customer',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentGateway',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUuids',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newUniqueId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'traps',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'facility',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrap',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUuids',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newUniqueId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'gateway',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'events',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrapEvent.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Models\\EloquentTrapEvent',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUuids',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'UPDATED_AT',
               'value' => 'null',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newUniqueId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'trap',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentCustomerRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentCustomerRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Domain\\Monitoring\\Repositories\\CustomerRepositoryInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customer',
               'type' => 'App\\Domain\\Monitoring\\Entities\\Customer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Customer',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\CustomerStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByType',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\CustomerType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nextIdentity',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentFacilityRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentFacilityRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Domain\\Monitoring\\Repositories\\FacilityRepositoryInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'facility',
               'type' => 'App\\Domain\\Monitoring\\Entities\\Facility',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Facility',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\FacilityStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByType',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\FacilityType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nextIdentity',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentGatewayRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentGatewayRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Domain\\Monitoring\\Repositories\\GatewayRepositoryInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'gateway',
               'type' => 'App\\Domain\\Monitoring\\Entities\\Gateway',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Gateway',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByHardwareId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Gateway',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hardwareId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByApiKey',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Gateway',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'apiKey',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\GatewayStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nextIdentity',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapEventRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapEventRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Domain\\Monitoring\\Repositories\\TrapEventRepositoryInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'App\\Domain\\Monitoring\\Entities\\TrapEvent',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\TrapEvent',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByTrapId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByDateRange',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'from',
               'type' => 'DateTimeImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'to',
               'type' => 'DateTimeImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findRecent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'countByTrapId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trapId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nextIdentity',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Persistence\\Eloquent\\Repositories\\EloquentTrapRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Domain\\Monitoring\\Repositories\\TrapRepositoryInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trap',
               'type' => 'App\\Domain\\Monitoring\\Entities\\Trap',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Trap',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByHardwareId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Domain\\Monitoring\\Entities\\Trap',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hardwareId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByGatewayId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'gatewayId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'App\\Domain\\Monitoring\\Enums\\TrapStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByType',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'App\\Domain\\Monitoring\\Enums\\TrapType',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findLowBattery',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'threshold',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nextIdentity',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\DomainServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Providers\\DomainServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\Projects\\pest-contol\\src\\Infrastructure\\Providers\\EventServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Providers\\EventServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'listen',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
