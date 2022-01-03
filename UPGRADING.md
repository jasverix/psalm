# Upgrading from Psalm 4 to Psalm 5
## Changed
 - [BC] The parameter `$php_version` of `Psalm\Type\Atomic::create()` renamed
   to `$analysis_php_version_id` and changed from `array|null` to `int|null`.
   Previously it accepted PHP version as `array{major_version, minor_version}`
   while now it accepts version ID, similar to how [`PHP_VERSION_ID` is
   calculated](https://www.php.net/manual/en/reserved.constants.php#constant.php-version-id).

 - [BC] The parameter `$php_version` of `Psalm\Type::parseString()` renamed to
   `$analysis_php_version_id` and changed from `array|null` to `int|null`.
   Previously it accepted PHP version as `array{major_version, minor_version}`
   while now it accepts version ID.

 - [BC] Parameter 0 of `canBeFullyExpressedInPhp()` of the classes listed below
   changed name from `php_major_version` to `analysis_php_version_id`.
   Previously it accepted major PHP version as int (e.g. `7`), while now it
   accepts version ID. Classes affected:
    - `Psalm\Type\Atomic`
    - `Psalm\Type\Atomic\Scalar`
    - `Psalm\Type\Atomic\TArray`
    - `Psalm\Type\Atomic\TArrayKey`
    - `Psalm\Type\Atomic\TAssertionFalsy`
    - `Psalm\Type\Atomic\TCallable`
    - `Psalm\Type\Atomic\TCallableObject`
    - `Psalm\Type\Atomic\TCallableString`
    - `Psalm\Type\Atomic\TClassConstant`
    - `Psalm\Type\Atomic\TClassString`
    - `Psalm\Type\Atomic\TClassStringMap`
    - `Psalm\Type\Atomic\TClosedResource`
    - `Psalm\Type\Atomic\TClosure`
    - `Psalm\Type\Atomic\TConditional`
    - `Psalm\Type\Atomic\TDependentGetClass`
    - `Psalm\Type\Atomic\TDependentGetDebugType`
    - `Psalm\Type\Atomic\TDependentGetType`
    - `Psalm\Type\Atomic\TDependentListKey`
    - `Psalm\Type\Atomic\TEnumCase`
    - `Psalm\Type\Atomic\TFalse`
    - `Psalm\Type\Atomic\TGenericObject`
    - `Psalm\Type\Atomic\THtmlEscapedString`
    - `Psalm\Type\Atomic\TIntMask`
    - `Psalm\Type\Atomic\TIntMaskOf`
    - `Psalm\Type\Atomic\TIntRange`
    - `Psalm\Type\Atomic\TIterable`
    - `Psalm\Type\Atomic\TKeyedArray`
    - `Psalm\Type\Atomic\TKeyOfClassConstant`
    - `Psalm\Type\Atomic\TList`
    - `Psalm\Type\Atomic\TLiteralClassString`
    - `Psalm\Type\Atomic\TLowercaseString`
    - `Psalm\Type\Atomic\TMixed`
    - `Psalm\Type\Atomic\TNamedObject`
    - `Psalm\Type\Atomic\TNever`
    - `Psalm\Type\Atomic\TNonEmptyLowercaseString`
    - `Psalm\Type\Atomic\TNonspecificLiteralInt`
    - `Psalm\Type\Atomic\TNonspecificLiteralString`
    - `Psalm\Type\Atomic\TNull`
    - `Psalm\Type\Atomic\TNumeric`
    - `Psalm\Type\Atomic\TNumericString`
    - `Psalm\Type\Atomic\TObject`
    - `Psalm\Type\Atomic\TObjectWithProperties`
    - `Psalm\Type\Atomic\TPositiveInt`
    - `Psalm\Type\Atomic\TResource`
    - `Psalm\Type\Atomic\TScalar`
    - `Psalm\Type\Atomic\TTemplateIndexedAccess`
    - `Psalm\Type\Atomic\TTemplateParam`
    - `Psalm\Type\Atomic\TTraitString`
    - `Psalm\Type\Atomic\TTrue`
    - `Psalm\Type\Atomic\TTypeAlias`
    - `Psalm\Type\Atomic\TValueOfClassConstant`
    - `Psalm\Type\Atomic\TVoid`
    - `Psalm\Type\Union`

 - [BC] Parameter 3 of `toPhpString()` of methods listed below changed name
   from `php_major_version` to `analysis_php_version_id`. Previously it
   accepted major PHP version as int (e.g. `7`), while now it accepts version
   ID. Classes affected:
    - `Psalm\Type\Atomic`
    - `Psalm\Type\Atomic\CallableTrait`
    - `Psalm\Type\Atomic\TAnonymousClassInstance`
    - `Psalm\Type\Atomic\TArray`
    - `Psalm\Type\Atomic\TArrayKey`
    - `Psalm\Type\Atomic\TAssertionFalsy`
    - `Psalm\Type\Atomic\TBool`
    - `Psalm\Type\Atomic\TCallable`
    - `Psalm\Type\Atomic\TCallableObject`
    - `Psalm\Type\Atomic\TClassConstant`
    - `Psalm\Type\Atomic\TClassString`
    - `Psalm\Type\Atomic\TClassStringMap`
    - `Psalm\Type\Atomic\TClosedResource`
    - `Psalm\Type\Atomic\TConditional`
    - `Psalm\Type\Atomic\TEmpty`
    - `Psalm\Type\Atomic\TEnumCase`
    - `Psalm\Type\Atomic\TFloat`
    - `Psalm\Type\Atomic\TGenericObject`
    - `Psalm\Type\Atomic\TInt`
    - `Psalm\Type\Atomic\TIterable`
    - `Psalm\Type\Atomic\TKeyedArray`
    - `Psalm\Type\Atomic\TKeyOfClassConstant`
    - `Psalm\Type\Atomic\TList`
    - `Psalm\Type\Atomic\TLiteralClassString`
    - `Psalm\Type\Atomic\TMixed`
    - `Psalm\Type\Atomic\TNamedObject`
    - `Psalm\Type\Atomic\TNever`
    - `Psalm\Type\Atomic\TNull`
    - `Psalm\Type\Atomic\TNumeric`
    - `Psalm\Type\Atomic\TObject`
    - `Psalm\Type\Atomic\TObjectWithProperties`
    - `Psalm\Type\Atomic\TResource`
    - `Psalm\Type\Atomic\TScalar`
    - `Psalm\Type\Atomic\TString`
    - `Psalm\Type\Atomic\TTemplateIndexedAccess`
    - `Psalm\Type\Atomic\TTemplateParam`
    - `Psalm\Type\Atomic\TTraitString`
    - `Psalm\Type\Atomic\TTypeAlias`
    - `Psalm\Type\Atomic\TValueOfClassConstant`
    - `Psalm\Type\Atomic\TVoid`
    - `Psalm\Type\Union`
 - While not a BC break per se, all classes / interfaces / traits / enums under
   `Psalm\Internal` namespace are now marked `@internal`.

## Removed
 - [BC] Property `Psalm\Codebase::$php_major_version` was removed, use
   `Psalm\Codebase::$analysis_php_version_id`.
 - [BC] Property `Psalm\Codebase::$php_minor_version` was removed, use
   `Psalm\Codebase::$analysis_php_version_id`.
 - [BC] Class `Psalm\Type\Atomic\TEmpty` was removed
 - [BC] Method `Psalm\Type\Union::isEmpty()` was removed
 - [BC] Property `Psalm\Config::$allow_phpstorm_generics` was removed
 - [BC] Property `Psalm\Config::$exit_functions` was removed
 - [BC] Method `Psalm\Type::getEmpty()` was removed
