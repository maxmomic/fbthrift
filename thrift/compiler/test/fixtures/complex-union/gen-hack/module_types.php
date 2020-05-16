<?hh // strict
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

enum ComplexUnionEnum: int {
  _EMPTY_ = 0;
  intValue = 1;
  stringValue = 5;
  intListValue = 2;
  stringListValue = 3;
  typedefValue = 9;
  stringRef = 14;
}

/**
 * Original thrift struct:-
 * ComplexUnion
 */
class ComplexUnion implements \IThriftStruct, \IThriftUnion<ComplexUnionEnum> {
  use \ThriftUnionSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'intValue',
      'union' => true,
      'type' => \TType::I64,
    ),
    5 => shape(
      'var' => 'stringValue',
      'union' => true,
      'type' => \TType::STRING,
    ),
    2 => shape(
      'var' => 'intListValue',
      'union' => true,
      'type' => \TType::LST,
      'etype' => \TType::I64,
      'elem' => shape(
        'type' => \TType::I64,
      ),
      'format' => 'collection',
    ),
    3 => shape(
      'var' => 'stringListValue',
      'union' => true,
      'type' => \TType::LST,
      'etype' => \TType::STRING,
      'elem' => shape(
        'type' => \TType::STRING,
      ),
      'format' => 'collection',
    ),
    9 => shape(
      'var' => 'typedefValue',
      'union' => true,
      'type' => \TType::MAP,
      'ktype' => \TType::I16,
      'vtype' => \TType::STRING,
      'key' => shape(
        'type' => \TType::I16,
      ),
      'val' => shape(
        'type' => \TType::STRING,
      ),
      'format' => 'collection',
    ),
    14 => shape(
      'var' => 'stringRef',
      'union' => true,
      'type' => \TType::STRING,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'intValue' => 1,
    'stringValue' => 5,
    'intListValue' => 2,
    'stringListValue' => 3,
    'typedefValue' => 9,
    'stringRef' => 14,
  ];

  const type TConstructorShape = shape(
    ?'intValue' => ?int,
    ?'stringValue' => ?string,
    ?'intListValue' => ?Vector<int>,
    ?'stringListValue' => ?Vector<string>,
    ?'typedefValue' => ?Map<int, string>,
    ?'stringRef' => ?string,
  );

  const int STRUCTURAL_ID = 1260275021738383280;
  /**
   * Original thrift field:-
   * 1: i64 intValue
   */
  protected ?int $intValue;
  /**
   * Original thrift field:-
   * 5: string stringValue
   */
  protected ?string $stringValue;
  /**
   * Original thrift field:-
   * 2: list<i64> intListValue
   */
  protected ?Vector<int> $intListValue;
  /**
   * Original thrift field:-
   * 3: list<string> stringListValue
   */
  protected ?Vector<string> $stringListValue;
  /**
   * Original thrift field:-
   * 9: map<i16, string> typedefValue
   */
  protected ?Map<int, string> $typedefValue;
  /**
   * Original thrift field:-
   * 14: string stringRef
   */
  protected ?string $stringRef;
  protected ComplexUnionEnum $_type = ComplexUnionEnum::_EMPTY_;

  <<__Rx>>
  public function __construct(?int $intValue = null, ?string $stringValue = null, ?Vector<int> $intListValue = null, ?Vector<string> $stringListValue = null, ?Map<int, string> $typedefValue = null, ?string $stringRef = null  ) {
    $this->_type = ComplexUnionEnum::_EMPTY_;
    if ($intValue !== null) {
      $this->intValue = $intValue;
      $this->_type = ComplexUnionEnum::intValue;
    }
    if ($stringValue !== null) {
      $this->stringValue = $stringValue;
      $this->_type = ComplexUnionEnum::stringValue;
    }
    if ($intListValue !== null) {
      $this->intListValue = $intListValue;
      $this->_type = ComplexUnionEnum::intListValue;
    }
    if ($stringListValue !== null) {
      $this->stringListValue = $stringListValue;
      $this->_type = ComplexUnionEnum::stringListValue;
    }
    if ($typedefValue !== null) {
      $this->typedefValue = $typedefValue;
      $this->_type = ComplexUnionEnum::typedefValue;
    }
    if ($stringRef !== null) {
      $this->stringRef = $stringRef;
      $this->_type = ComplexUnionEnum::stringRef;
    }
  }

  public static function fromShape(self::TConstructorShape $shape): this {
    return new static(
      Shapes::idx($shape, 'intValue'),
      Shapes::idx($shape, 'stringValue'),
      Shapes::idx($shape, 'intListValue'),
      Shapes::idx($shape, 'stringListValue'),
      Shapes::idx($shape, 'typedefValue'),
      Shapes::idx($shape, 'stringRef'),
    );
  }

  public function getName(): string {
    return 'ComplexUnion';
  }

  public function getType(): ComplexUnionEnum {
    return $this->_type;
  }

  public function set_intValue(int $intValue): this {
    $this->_type = ComplexUnionEnum::intValue;
    $this->intValue = $intValue;
    return $this;
  }

  public function get_intValue(): int {
    invariant(
      $this->_type === ComplexUnionEnum::intValue,
      'get_intValue called on an instance of ComplexUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->intValue as nonnull;
  }

  public function set_stringValue(string $stringValue): this {
    $this->_type = ComplexUnionEnum::stringValue;
    $this->stringValue = $stringValue;
    return $this;
  }

  public function get_stringValue(): string {
    invariant(
      $this->_type === ComplexUnionEnum::stringValue,
      'get_stringValue called on an instance of ComplexUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->stringValue as nonnull;
  }

  public function set_intListValue(Vector<int> $intListValue): this {
    $this->_type = ComplexUnionEnum::intListValue;
    $this->intListValue = $intListValue;
    return $this;
  }

  public function get_intListValue(): Vector<int> {
    invariant(
      $this->_type === ComplexUnionEnum::intListValue,
      'get_intListValue called on an instance of ComplexUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->intListValue as nonnull;
  }

  public function set_stringListValue(Vector<string> $stringListValue): this {
    $this->_type = ComplexUnionEnum::stringListValue;
    $this->stringListValue = $stringListValue;
    return $this;
  }

  public function get_stringListValue(): Vector<string> {
    invariant(
      $this->_type === ComplexUnionEnum::stringListValue,
      'get_stringListValue called on an instance of ComplexUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->stringListValue as nonnull;
  }

  public function set_typedefValue(Map<int, string> $typedefValue): this {
    $this->_type = ComplexUnionEnum::typedefValue;
    $this->typedefValue = $typedefValue;
    return $this;
  }

  public function get_typedefValue(): Map<int, string> {
    invariant(
      $this->_type === ComplexUnionEnum::typedefValue,
      'get_typedefValue called on an instance of ComplexUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->typedefValue as nonnull;
  }

  public function set_stringRef(string $stringRef): this {
    $this->_type = ComplexUnionEnum::stringRef;
    $this->stringRef = $stringRef;
    return $this;
  }

  public function get_stringRef(): string {
    invariant(
      $this->_type === ComplexUnionEnum::stringRef,
      'get_stringRef called on an instance of ComplexUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->stringRef as nonnull;
  }

  public static function getAnnotations(): darray<string, mixed> {
    return darray[
    ];
  }
  public function readFromJson(string $jsonText): void {
    $this->_type = ComplexUnionEnum::_EMPTY_;
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'intValue') !== null) {
      $this->intValue = /* HH_FIXME[4110] */ $parsed['intValue'];
      $this->_type = ComplexUnionEnum::intValue;
    }    
    if (idx($parsed, 'stringValue') !== null) {
      $this->stringValue = /* HH_FIXME[4110] */ $parsed['stringValue'];
      $this->_type = ComplexUnionEnum::stringValue;
    }    
    if (idx($parsed, 'intListValue') !== null) {
      $_json3 = /* HH_FIXME[4110] */ $parsed['intListValue'];
      $_container4 = Vector {};
      foreach(/* HH_FIXME[4110] */ $_json3 as $_key1 => $_value2) {
        $_elem5 = 0;
        $_elem5 = $_value2;
        $_container4 []= $_elem5;
      }
      $this->intListValue = $_container4;
      $this->_type = ComplexUnionEnum::intListValue;
    }    
    if (idx($parsed, 'stringListValue') !== null) {
      $_json9 = /* HH_FIXME[4110] */ $parsed['stringListValue'];
      $_container10 = Vector {};
      foreach(/* HH_FIXME[4110] */ $_json9 as $_key7 => $_value8) {
        $_elem11 = '';
        $_elem11 = $_value8;
        $_container10 []= $_elem11;
      }
      $this->stringListValue = $_container10;
      $this->_type = ComplexUnionEnum::stringListValue;
    }    
    if (idx($parsed, 'typedefValue') !== null) {
      $_json15 = /* HH_FIXME[4110] */ $parsed['typedefValue'];
      $_container16 = Map {};
      foreach(/* HH_FIXME[4110] */ $_json15 as $_key13 => $_value14) {
        $_value17 = '';
        $_value17 = $_value14;
        $_container16[$_key13] = $_value17;
      }
      $this->typedefValue = $_container16;
      $this->_type = ComplexUnionEnum::typedefValue;
    }    
    if (idx($parsed, 'stringRef') !== null) {
      $this->stringRef = /* HH_FIXME[4110] */ $parsed['stringRef'];
      $this->_type = ComplexUnionEnum::stringRef;
    }    
  }

}

enum ListUnionEnum: int {
  _EMPTY_ = 0;
  intListValue = 2;
  stringListValue = 3;
}

/**
 * Original thrift struct:-
 * ListUnion
 */
class ListUnion implements \IThriftStruct, \IThriftUnion<ListUnionEnum> {
  use \ThriftUnionSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    2 => shape(
      'var' => 'intListValue',
      'union' => true,
      'type' => \TType::LST,
      'etype' => \TType::I64,
      'elem' => shape(
        'type' => \TType::I64,
      ),
      'format' => 'collection',
    ),
    3 => shape(
      'var' => 'stringListValue',
      'union' => true,
      'type' => \TType::LST,
      'etype' => \TType::STRING,
      'elem' => shape(
        'type' => \TType::STRING,
      ),
      'format' => 'collection',
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'intListValue' => 2,
    'stringListValue' => 3,
  ];

  const type TConstructorShape = shape(
    ?'intListValue' => ?Vector<int>,
    ?'stringListValue' => ?Vector<string>,
  );

  const int STRUCTURAL_ID = 3965946011249022525;
  /**
   * Original thrift field:-
   * 2: list<i64> intListValue
   */
  protected ?Vector<int> $intListValue;
  /**
   * Original thrift field:-
   * 3: list<string> stringListValue
   */
  protected ?Vector<string> $stringListValue;
  protected ListUnionEnum $_type = ListUnionEnum::_EMPTY_;

  <<__Rx>>
  public function __construct(?Vector<int> $intListValue = null, ?Vector<string> $stringListValue = null  ) {
    $this->_type = ListUnionEnum::_EMPTY_;
    if ($intListValue !== null) {
      $this->intListValue = $intListValue;
      $this->_type = ListUnionEnum::intListValue;
    }
    if ($stringListValue !== null) {
      $this->stringListValue = $stringListValue;
      $this->_type = ListUnionEnum::stringListValue;
    }
  }

  public static function fromShape(self::TConstructorShape $shape): this {
    return new static(
      Shapes::idx($shape, 'intListValue'),
      Shapes::idx($shape, 'stringListValue'),
    );
  }

  public function getName(): string {
    return 'ListUnion';
  }

  public function getType(): ListUnionEnum {
    return $this->_type;
  }

  public function set_intListValue(Vector<int> $intListValue): this {
    $this->_type = ListUnionEnum::intListValue;
    $this->intListValue = $intListValue;
    return $this;
  }

  public function get_intListValue(): Vector<int> {
    invariant(
      $this->_type === ListUnionEnum::intListValue,
      'get_intListValue called on an instance of ListUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->intListValue as nonnull;
  }

  public function set_stringListValue(Vector<string> $stringListValue): this {
    $this->_type = ListUnionEnum::stringListValue;
    $this->stringListValue = $stringListValue;
    return $this;
  }

  public function get_stringListValue(): Vector<string> {
    invariant(
      $this->_type === ListUnionEnum::stringListValue,
      'get_stringListValue called on an instance of ListUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->stringListValue as nonnull;
  }

  public static function getAnnotations(): darray<string, mixed> {
    return darray[
    ];
  }
  public function readFromJson(string $jsonText): void {
    $this->_type = ListUnionEnum::_EMPTY_;
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'intListValue') !== null) {
      $_json3 = /* HH_FIXME[4110] */ $parsed['intListValue'];
      $_container4 = Vector {};
      foreach(/* HH_FIXME[4110] */ $_json3 as $_key1 => $_value2) {
        $_elem5 = 0;
        $_elem5 = $_value2;
        $_container4 []= $_elem5;
      }
      $this->intListValue = $_container4;
      $this->_type = ListUnionEnum::intListValue;
    }    
    if (idx($parsed, 'stringListValue') !== null) {
      $_json9 = /* HH_FIXME[4110] */ $parsed['stringListValue'];
      $_container10 = Vector {};
      foreach(/* HH_FIXME[4110] */ $_json9 as $_key7 => $_value8) {
        $_elem11 = '';
        $_elem11 = $_value8;
        $_container10 []= $_elem11;
      }
      $this->stringListValue = $_container10;
      $this->_type = ListUnionEnum::stringListValue;
    }    
  }

}

enum DataUnionEnum: int {
  _EMPTY_ = 0;
  binaryData = 1;
  stringData = 2;
}

/**
 * Original thrift struct:-
 * DataUnion
 */
class DataUnion implements \IThriftStruct, \IThriftUnion<DataUnionEnum> {
  use \ThriftUnionSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'binaryData',
      'union' => true,
      'type' => \TType::STRING,
    ),
    2 => shape(
      'var' => 'stringData',
      'union' => true,
      'type' => \TType::STRING,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'binaryData' => 1,
    'stringData' => 2,
  ];

  const type TConstructorShape = shape(
    ?'binaryData' => ?string,
    ?'stringData' => ?string,
  );

  const int STRUCTURAL_ID = 4138034353479042532;
  /**
   * Original thrift field:-
   * 1: binary binaryData
   */
  protected ?string $binaryData;
  /**
   * Original thrift field:-
   * 2: string stringData
   */
  protected ?string $stringData;
  protected DataUnionEnum $_type = DataUnionEnum::_EMPTY_;

  <<__Rx>>
  public function __construct(?string $binaryData = null, ?string $stringData = null  ) {
    $this->_type = DataUnionEnum::_EMPTY_;
    if ($binaryData !== null) {
      $this->binaryData = $binaryData;
      $this->_type = DataUnionEnum::binaryData;
    }
    if ($stringData !== null) {
      $this->stringData = $stringData;
      $this->_type = DataUnionEnum::stringData;
    }
  }

  public static function fromShape(self::TConstructorShape $shape): this {
    return new static(
      Shapes::idx($shape, 'binaryData'),
      Shapes::idx($shape, 'stringData'),
    );
  }

  public function getName(): string {
    return 'DataUnion';
  }

  public function getType(): DataUnionEnum {
    return $this->_type;
  }

  public function set_binaryData(string $binaryData): this {
    $this->_type = DataUnionEnum::binaryData;
    $this->binaryData = $binaryData;
    return $this;
  }

  public function get_binaryData(): string {
    invariant(
      $this->_type === DataUnionEnum::binaryData,
      'get_binaryData called on an instance of DataUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->binaryData as nonnull;
  }

  public function set_stringData(string $stringData): this {
    $this->_type = DataUnionEnum::stringData;
    $this->stringData = $stringData;
    return $this;
  }

  public function get_stringData(): string {
    invariant(
      $this->_type === DataUnionEnum::stringData,
      'get_stringData called on an instance of DataUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->stringData as nonnull;
  }

  public static function getAnnotations(): darray<string, mixed> {
    return darray[
    ];
  }
  public function readFromJson(string $jsonText): void {
    $this->_type = DataUnionEnum::_EMPTY_;
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'binaryData') !== null) {
      $this->binaryData = /* HH_FIXME[4110] */ $parsed['binaryData'];
      $this->_type = DataUnionEnum::binaryData;
    }    
    if (idx($parsed, 'stringData') !== null) {
      $this->stringData = /* HH_FIXME[4110] */ $parsed['stringData'];
      $this->_type = DataUnionEnum::stringData;
    }    
  }

}

/**
 * Original thrift struct:-
 * Val
 */
class Val implements \IThriftStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'strVal',
      'type' => \TType::STRING,
    ),
    2 => shape(
      'var' => 'intVal',
      'type' => \TType::I32,
    ),
    9 => shape(
      'var' => 'typedefValue',
      'type' => \TType::MAP,
      'ktype' => \TType::I16,
      'vtype' => \TType::STRING,
      'key' => shape(
        'type' => \TType::I16,
      ),
      'val' => shape(
        'type' => \TType::STRING,
      ),
      'format' => 'collection',
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'strVal' => 1,
    'intVal' => 2,
    'typedefValue' => 9,
  ];

  const type TConstructorShape = shape(
    ?'strVal' => string,
    ?'intVal' => int,
    ?'typedefValue' => Map<int, string>,
  );

  const int STRUCTURAL_ID = 7250696402099336501;
  /**
   * Original thrift field:-
   * 1: string strVal
   */
  public string $strVal;
  /**
   * Original thrift field:-
   * 2: i32 intVal
   */
  public int $intVal;
  /**
   * Original thrift field:-
   * 9: map<i16, string> typedefValue
   */
  public Map<int, string> $typedefValue;

  <<__Rx>>
  public function __construct(?string $strVal = null, ?int $intVal = null, ?Map<int, string> $typedefValue = null  ) {
    $this->strVal = $strVal ?? '';
    $this->intVal = $intVal ?? 0;
    $this->typedefValue = $typedefValue ?? Map {};
  }

  public static function fromShape(self::TConstructorShape $shape): this {
    return new static(
      Shapes::idx($shape, 'strVal'),
      Shapes::idx($shape, 'intVal'),
      Shapes::idx($shape, 'typedefValue'),
    );
  }

  public function getName(): string {
    return 'Val';
  }

  public static function getAnnotations(): darray<string, mixed> {
    return darray[
    ];
  }
  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'strVal') !== null) {
      $this->strVal = /* HH_FIXME[4110] */ $parsed['strVal'];
    }    
    if (idx($parsed, 'intVal') !== null) {
      $_tmp0 = (int)/* HH_FIXME[4110] */ $parsed['intVal'];
      if ($_tmp0 > 0x7fffffff) {
        throw new \TProtocolException("number exceeds limit in field");
      } else {
        $this->intVal = (int)$_tmp0;
      }
    }    
    if (idx($parsed, 'typedefValue') !== null) {
      $_json4 = /* HH_FIXME[4110] */ $parsed['typedefValue'];
      $_container5 = Map {};
      foreach(/* HH_FIXME[4110] */ $_json4 as $_key2 => $_value3) {
        $_value6 = '';
        $_value6 = $_value3;
        $_container5[$_key2] = $_value6;
      }
      $this->typedefValue = $_container5;
    }    
  }

}

enum ValUnionEnum: int {
  _EMPTY_ = 0;
  v1 = 1;
  v2 = 2;
}

/**
 * Original thrift struct:-
 * ValUnion
 */
class ValUnion implements \IThriftStruct, \IThriftUnion<ValUnionEnum> {
  use \ThriftUnionSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'v1',
      'union' => true,
      'type' => \TType::STRUCT,
      'class' => Val::class,
    ),
    2 => shape(
      'var' => 'v2',
      'union' => true,
      'type' => \TType::STRUCT,
      'class' => Val::class,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'v1' => 1,
    'v2' => 2,
  ];

  const type TConstructorShape = shape(
    ?'v1' => ?Val,
    ?'v2' => ?Val,
  );

  const int STRUCTURAL_ID = 7355268417298249876;
  /**
   * Original thrift field:-
   * 1: struct module.Val v1
   */
  protected ?Val $v1;
  /**
   * Original thrift field:-
   * 2: struct module.Val v2
   */
  protected ?Val $v2;
  protected ValUnionEnum $_type = ValUnionEnum::_EMPTY_;

  <<__Rx>>
  public function __construct(?Val $v1 = null, ?Val $v2 = null  ) {
    $this->_type = ValUnionEnum::_EMPTY_;
    if ($v1 !== null) {
      $this->v1 = $v1;
      $this->_type = ValUnionEnum::v1;
    }
    if ($v2 !== null) {
      $this->v2 = $v2;
      $this->_type = ValUnionEnum::v2;
    }
  }

  public static function fromShape(self::TConstructorShape $shape): this {
    return new static(
      Shapes::idx($shape, 'v1'),
      Shapes::idx($shape, 'v2'),
    );
  }

  public function getName(): string {
    return 'ValUnion';
  }

  public function getType(): ValUnionEnum {
    return $this->_type;
  }

  public function set_v1(Val $v1): this {
    $this->_type = ValUnionEnum::v1;
    $this->v1 = $v1;
    return $this;
  }

  public function get_v1(): Val {
    invariant(
      $this->_type === ValUnionEnum::v1,
      'get_v1 called on an instance of ValUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->v1 as nonnull;
  }

  public function set_v2(Val $v2): this {
    $this->_type = ValUnionEnum::v2;
    $this->v2 = $v2;
    return $this;
  }

  public function get_v2(): Val {
    invariant(
      $this->_type === ValUnionEnum::v2,
      'get_v2 called on an instance of ValUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->v2 as nonnull;
  }

  public static function getAnnotations(): darray<string, mixed> {
    return darray[
    ];
  }
  public function readFromJson(string $jsonText): void {
    $this->_type = ValUnionEnum::_EMPTY_;
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'v1') !== null) {
      $_tmp0 = json_encode(/* HH_FIXME[4110] */ $parsed['v1']);
      $_tmp1 = new Val();
      $_tmp1->readFromJson($_tmp0);
      $this->v1 = $_tmp1;
      $this->_type = ValUnionEnum::v1;
    }    
    if (idx($parsed, 'v2') !== null) {
      $_tmp2 = json_encode(/* HH_FIXME[4110] */ $parsed['v2']);
      $_tmp3 = new Val();
      $_tmp3->readFromJson($_tmp2);
      $this->v2 = $_tmp3;
      $this->_type = ValUnionEnum::v2;
    }    
  }

}

enum VirtualComplexUnionEnum: int {
  _EMPTY_ = 0;
  thingOne = 1;
  thingTwo = 2;
}

/**
 * Original thrift struct:-
 * VirtualComplexUnion
 */
class VirtualComplexUnion implements \IThriftStruct, \IThriftUnion<VirtualComplexUnionEnum> {
  use \ThriftUnionSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'thingOne',
      'union' => true,
      'type' => \TType::STRING,
    ),
    2 => shape(
      'var' => 'thingTwo',
      'union' => true,
      'type' => \TType::STRING,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'thingOne' => 1,
    'thingTwo' => 2,
  ];

  const type TConstructorShape = shape(
    ?'thingOne' => ?string,
    ?'thingTwo' => ?string,
  );

  const int STRUCTURAL_ID = 8657642278595798833;
  /**
   * Original thrift field:-
   * 1: string thingOne
   */
  protected ?string $thingOne;
  /**
   * Original thrift field:-
   * 2: string thingTwo
   */
  protected ?string $thingTwo;
  protected VirtualComplexUnionEnum $_type = VirtualComplexUnionEnum::_EMPTY_;

  <<__Rx>>
  public function __construct(?string $thingOne = null, ?string $thingTwo = null  ) {
    $this->_type = VirtualComplexUnionEnum::_EMPTY_;
    if ($thingOne !== null) {
      $this->thingOne = $thingOne;
      $this->_type = VirtualComplexUnionEnum::thingOne;
    }
    if ($thingTwo !== null) {
      $this->thingTwo = $thingTwo;
      $this->_type = VirtualComplexUnionEnum::thingTwo;
    }
  }

  public static function fromShape(self::TConstructorShape $shape): this {
    return new static(
      Shapes::idx($shape, 'thingOne'),
      Shapes::idx($shape, 'thingTwo'),
    );
  }

  public function getName(): string {
    return 'VirtualComplexUnion';
  }

  public function getType(): VirtualComplexUnionEnum {
    return $this->_type;
  }

  public function set_thingOne(string $thingOne): this {
    $this->_type = VirtualComplexUnionEnum::thingOne;
    $this->thingOne = $thingOne;
    return $this;
  }

  public function get_thingOne(): string {
    invariant(
      $this->_type === VirtualComplexUnionEnum::thingOne,
      'get_thingOne called on an instance of VirtualComplexUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->thingOne as nonnull;
  }

  public function set_thingTwo(string $thingTwo): this {
    $this->_type = VirtualComplexUnionEnum::thingTwo;
    $this->thingTwo = $thingTwo;
    return $this;
  }

  public function get_thingTwo(): string {
    invariant(
      $this->_type === VirtualComplexUnionEnum::thingTwo,
      'get_thingTwo called on an instance of VirtualComplexUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->thingTwo as nonnull;
  }

  public static function getAnnotations(): darray<string, mixed> {
    return darray[
      'cpp.virtual' => "1",
    ];
  }
  public function readFromJson(string $jsonText): void {
    $this->_type = VirtualComplexUnionEnum::_EMPTY_;
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'thingOne') !== null) {
      $this->thingOne = /* HH_FIXME[4110] */ $parsed['thingOne'];
      $this->_type = VirtualComplexUnionEnum::thingOne;
    }    
    if (idx($parsed, 'thingTwo') !== null) {
      $this->thingTwo = /* HH_FIXME[4110] */ $parsed['thingTwo'];
      $this->_type = VirtualComplexUnionEnum::thingTwo;
    }    
  }

}

/**
 * Original thrift struct:-
 * NonCopyableStruct
 */
class NonCopyableStruct implements \IThriftStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'num',
      'type' => \TType::I64,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'num' => 1,
  ];

  const type TConstructorShape = shape(
    ?'num' => int,
  );

  const int STRUCTURAL_ID = 7064950569513307469;
  /**
   * Original thrift field:-
   * 1: i64 num
   */
  public int $num;

  <<__Rx>>
  public function __construct(?int $num = null  ) {
    $this->num = $num ?? 0;
  }

  public static function fromShape(self::TConstructorShape $shape): this {
    return new static(
      Shapes::idx($shape, 'num'),
    );
  }

  public function getName(): string {
    return 'NonCopyableStruct';
  }

  public static function getAnnotations(): darray<string, mixed> {
    return darray[
      'cpp2.noncopyable' => "1",
    ];
  }
  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'num') !== null) {
      $this->num = /* HH_FIXME[4110] */ $parsed['num'];
    }    
  }

}

enum NonCopyableUnionEnum: int {
  _EMPTY_ = 0;
  s = 1;
}

/**
 * Original thrift struct:-
 * NonCopyableUnion
 */
class NonCopyableUnion implements \IThriftStruct, \IThriftUnion<NonCopyableUnionEnum> {
  use \ThriftUnionSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 's',
      'union' => true,
      'type' => \TType::STRUCT,
      'class' => NonCopyableStruct::class,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    's' => 1,
  ];

  const type TConstructorShape = shape(
    ?'s' => ?NonCopyableStruct,
  );

  const int STRUCTURAL_ID = 5595426780316201025;
  /**
   * Original thrift field:-
   * 1: struct module.NonCopyableStruct s
   */
  protected ?NonCopyableStruct $s;
  protected NonCopyableUnionEnum $_type = NonCopyableUnionEnum::_EMPTY_;

  <<__Rx>>
  public function __construct(?NonCopyableStruct $s = null  ) {
    $this->_type = NonCopyableUnionEnum::_EMPTY_;
    if ($s !== null) {
      $this->s = $s;
      $this->_type = NonCopyableUnionEnum::s;
    }
  }

  public static function fromShape(self::TConstructorShape $shape): this {
    return new static(
      Shapes::idx($shape, 's'),
    );
  }

  public function getName(): string {
    return 'NonCopyableUnion';
  }

  public function getType(): NonCopyableUnionEnum {
    return $this->_type;
  }

  public function set_s(NonCopyableStruct $s): this {
    $this->_type = NonCopyableUnionEnum::s;
    $this->s = $s;
    return $this;
  }

  public function get_s(): NonCopyableStruct {
    invariant(
      $this->_type === NonCopyableUnionEnum::s,
      'get_s called on an instance of NonCopyableUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->s as nonnull;
  }

  public static function getAnnotations(): darray<string, mixed> {
    return darray[
      'cpp2.noncopyable' => "1",
    ];
  }
  public function readFromJson(string $jsonText): void {
    $this->_type = NonCopyableUnionEnum::_EMPTY_;
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 's') !== null) {
      $_tmp0 = json_encode(/* HH_FIXME[4110] */ $parsed['s']);
      $_tmp1 = new NonCopyableStruct();
      $_tmp1->readFromJson($_tmp0);
      $this->s = $_tmp1;
      $this->_type = NonCopyableUnionEnum::s;
    }    
  }

}

