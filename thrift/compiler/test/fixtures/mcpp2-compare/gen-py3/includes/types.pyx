#
# Autogenerated by Thrift
#
# DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
#  @generated
#
cimport cython as __cython
from cpython.bytes cimport PyBytes_AsStringAndSize
from cpython.object cimport PyTypeObject, Py_LT, Py_LE, Py_EQ, Py_NE, Py_GT, Py_GE
from libcpp.memory cimport shared_ptr, make_shared, unique_ptr, make_unique
from libcpp.string cimport string
from libcpp cimport bool as cbool
from libcpp.iterator cimport inserter as cinserter
from cpython cimport bool as pbool
from cython.operator cimport dereference as deref, preincrement as inc, address as ptr_address
import thrift.py3.types
cimport thrift.py3.types
cimport thrift.py3.exceptions
from thrift.py3.types cimport (
    translate_cpp_enum_to_python,
    SetMetaClass as __SetMetaClass,
    constant_shared_ptr,
    default_inst,
    NOTSET as __NOTSET,
)
cimport thrift.py3.std_libcpp as std_libcpp
from thrift.py3.serializer import Protocol as __Protocol
cimport thrift.py3.serializer as serializer
from thrift.py3.serializer import deserialize, serialize
import folly.iobuf as __iobuf
from folly.optional cimport cOptional

import sys
import itertools
from collections.abc import Sequence, Set, Mapping, Iterable
import warnings
import weakref as __weakref
import builtins as _builtins

cimport includes.types_reflection as _types_reflection

cdef object __AnEnumEnumInstances = None  # Set[AnEnum]
cdef object __AnEnumEnumMembers = {}      # Dict[str, AnEnum]
cdef object __AnEnumEnumUniqueValues = dict()    # Dict[int, AnEnum]

@__cython.internal
@__cython.auto_pickle(False)
cdef class __AnEnumMeta(type):
    def __call__(cls, value):
        cdef int cvalue
        if isinstance(value, cls):
            return value
        if isinstance(value, int):
            cvalue = value
            if cvalue == 2:
                return AnEnum.FIELDA
            elif cvalue == 4:
                return AnEnum.FIELDB

        raise ValueError(f'{value} is not a valid AnEnum')

    def __getitem__(cls, name):
        return __AnEnumEnumMembers[name]

    def __dir__(cls):
        return ['__class__', '__doc__', '__members__', '__module__',
        'FIELDA',
        'FIELDB',
        ]

    def __iter__(cls):
        return iter(__AnEnumEnumUniqueValues.values())

    def __reversed__(cls):
        return reversed(iter(cls))

    def __contains__(cls, item):
        if not isinstance(item, cls):
            return False
        return item in __AnEnumEnumInstances

    def __len__(cls):
        return len(__AnEnumEnumInstances)


cdef __AnEnum_unique_instance(int value, str name):
    inst = __AnEnumEnumUniqueValues.get(value)
    if inst is None:
        inst = __AnEnumEnumUniqueValues[value] = AnEnum.__new__(AnEnum, value, name)
    __AnEnumEnumMembers[name] = inst
    return inst


@__cython.final
@__cython.auto_pickle(False)
cdef class AnEnum(thrift.py3.types.CompiledEnum):
    FIELDA = __AnEnum_unique_instance(2, "FIELDA")
    FIELDB = __AnEnum_unique_instance(4, "FIELDB")
    __members__ = thrift.py3.types.MappingProxyType(__AnEnumEnumMembers)

    def __cinit__(self, value, name):
        if __AnEnumEnumInstances is not None:
            raise TypeError('__new__ is disabled in the interest of type-safety')
        self.value = value
        self.name = name
        self.__hash = hash(name)
        self.__str = f"AnEnum.{name}"
        self.__repr = f"<{self.__str}: {value}>"

    def __repr__(self):
        return self.__repr

    def __str__(self):
        return self.__str

    def __int__(self):
        return self.value

    def __eq__(self, other):
        if not isinstance(other, AnEnum):
            warnings.warn(f"comparison not supported between instances of { AnEnum } and {type(other)}", RuntimeWarning, stacklevel=2)
            return False
        return self is other

    def __hash__(self):
        return self.__hash

    def __reduce__(self):
        return AnEnum, (self.value,)


__SetMetaClass(<PyTypeObject*> AnEnum, <PyTypeObject*> __AnEnumMeta)
__AnEnumEnumInstances = set(__AnEnumEnumUniqueValues.values())


cdef inline cAnEnum AnEnum_to_cpp(AnEnum value):
    cdef int cvalue = value.value
    if cvalue == 2:
        return AnEnum__FIELDA
    elif cvalue == 4:
        return AnEnum__FIELDB

@__cython.auto_pickle(False)
cdef class AStruct(thrift.py3.types.Struct):

    def __init__(
        AStruct self, *,
        FieldA=None
    ):
        if FieldA is not None:
            if not isinstance(FieldA, int):
                raise TypeError(f'FieldA is not a { int !r}.')
            FieldA = <cint32_t> FieldA

        self._cpp_obj = move(AStruct._make_instance(
          NULL,
          NULL,
          FieldA,
        ))

    def __call__(
        AStruct self,
        FieldA=__NOTSET
    ):
        ___NOTSET = __NOTSET  # Cheaper for larger structs
        cdef bint[1] __isNOTSET  # so make_instance is typed

        changes = False
        if FieldA is ___NOTSET:
            __isNOTSET[0] = True
            FieldA = None
        else:
            __isNOTSET[0] = False
            changes = True


        if not changes:
            return self

        if FieldA is not None:
            if not isinstance(FieldA, int):
                raise TypeError(f'FieldA is not a { int !r}.')
            FieldA = <cint32_t> FieldA

        inst = <AStruct>AStruct.__new__(AStruct)
        inst._cpp_obj = move(AStruct._make_instance(
          self._cpp_obj.get(),
          __isNOTSET,
          FieldA,
        ))
        return inst

    @staticmethod
    cdef unique_ptr[cAStruct] _make_instance(
        cAStruct* base_instance,
        bint* __isNOTSET,
        object FieldA 
    ) except *:
        cdef unique_ptr[cAStruct] c_inst
        if base_instance:
            c_inst = make_unique[cAStruct](deref(base_instance))
        else:
            c_inst = make_unique[cAStruct]()

        if base_instance:
            # Convert None's to default value. (or unset)
            if not __isNOTSET[0] and FieldA is None:
                deref(c_inst).FieldA = default_inst[cAStruct]().FieldA
                deref(c_inst).__isset.FieldA = False
                pass

        if FieldA is not None:
            deref(c_inst).FieldA = FieldA
            deref(c_inst).__isset.FieldA = True
        # in C++ you don't have to call move(), but this doesn't translate
        # into a C++ return statement, so you do here
        return move_unique(c_inst)

    def __iter__(self):
        yield 'FieldA', self.FieldA

    def __bool__(self):
        return True

    @staticmethod
    cdef create(shared_ptr[cAStruct] cpp_obj):
        inst = <AStruct>AStruct.__new__(AStruct)
        inst._cpp_obj = move_shared(cpp_obj)
        return inst

    @property
    def FieldA(self):

        return deref(self._cpp_obj).FieldA


    def __hash__(AStruct self):
        if not self.__hash:
            self.__hash = hash((
            self.FieldA,
            ))
        return self.__hash

    def __repr__(AStruct self):
        return f'AStruct(FieldA={repr(self.FieldA)})'
    def __copy__(AStruct self):
        cdef shared_ptr[cAStruct] cpp_obj = make_shared[cAStruct](
            deref(self._cpp_obj)
        )
        return AStruct.create(move_shared(cpp_obj))

    def __richcmp__(self, other, op):
        cdef int cop = op
        if not (
                isinstance(self, AStruct) and
                isinstance(other, AStruct)):
            if cop == Py_EQ:  # different types are never equal
                return False
            elif cop == Py_NE:  # different types are always notequal
                return True
            else:
                return NotImplemented

        cdef cAStruct* cself = (<AStruct>self)._cpp_obj.get()
        cdef cAStruct* cother = (<AStruct>other)._cpp_obj.get()
        if cop == Py_EQ:
            return deref(cself) == deref(cother)
        elif cop == Py_NE:
            return deref(cself) != deref(cother)
        elif cop == Py_LT:
            return deref(cself) < deref(cother)
        elif cop == Py_LE:
            return deref(cself) <= deref(cother)
        elif cop == Py_GT:
            return deref(cself) > deref(cother)
        elif cop == Py_GE:
            return deref(cself) >= deref(cother)
        else:
            return NotImplemented

    @staticmethod
    def __get_reflection__():
        return _types_reflection.get_reflection__AStruct()

    cdef __iobuf.IOBuf _serialize(AStruct self, proto):
        cdef __iobuf.cIOBufQueue queue = __iobuf.cIOBufQueue(__iobuf.cacheChainLength())
        cdef cAStruct* cpp_obj = self._cpp_obj.get()
        if proto is __Protocol.COMPACT:
            with nogil:
                serializer.CompactSerialize[cAStruct](deref(cpp_obj), &queue, serializer.SHARE_EXTERNAL_BUFFER)
        elif proto is __Protocol.BINARY:
            with nogil:
                serializer.BinarySerialize[cAStruct](deref(cpp_obj), &queue, serializer.SHARE_EXTERNAL_BUFFER)
        elif proto is __Protocol.JSON:
            with nogil:
                serializer.JSONSerialize[cAStruct](deref(cpp_obj), &queue, serializer.SHARE_EXTERNAL_BUFFER)
        elif proto is __Protocol.COMPACT_JSON:
            with nogil:
                serializer.CompactJSONSerialize[cAStruct](deref(cpp_obj), &queue, serializer.SHARE_EXTERNAL_BUFFER)
        return __iobuf.from_unique_ptr(queue.move())

    cdef cuint32_t _deserialize(AStruct self, const __iobuf.cIOBuf* buf, proto) except? 0:
        cdef cuint32_t needed
        self._cpp_obj = make_shared[cAStruct]()
        cdef cAStruct* cpp_obj = self._cpp_obj.get()
        if proto is __Protocol.COMPACT:
            with nogil:
                needed = serializer.CompactDeserialize[cAStruct](buf, deref(cpp_obj), serializer.SHARE_EXTERNAL_BUFFER)
        elif proto is __Protocol.BINARY:
            with nogil:
                needed = serializer.BinaryDeserialize[cAStruct](buf, deref(cpp_obj), serializer.SHARE_EXTERNAL_BUFFER)
        elif proto is __Protocol.JSON:
            with nogil:
                needed = serializer.JSONDeserialize[cAStruct](buf, deref(cpp_obj), serializer.SHARE_EXTERNAL_BUFFER)
        elif proto is __Protocol.COMPACT_JSON:
            with nogil:
                needed = serializer.CompactJSONDeserialize[cAStruct](buf, deref(cpp_obj), serializer.SHARE_EXTERNAL_BUFFER)
        return needed

    def __reduce__(self):
        return (deserialize, (AStruct, serialize(self)))


@__cython.auto_pickle(False)
cdef class AStructB(thrift.py3.types.Struct):

    def __init__(
        AStructB self, *,
        AStruct FieldA=None
    ):
        self._cpp_obj = move(AStructB._make_instance(
          NULL,
          NULL,
          FieldA,
        ))

    def __call__(
        AStructB self,
        FieldA=__NOTSET
    ):
        ___NOTSET = __NOTSET  # Cheaper for larger structs
        cdef bint[1] __isNOTSET  # so make_instance is typed

        changes = False
        if FieldA is ___NOTSET:
            __isNOTSET[0] = True
            FieldA = None
        else:
            __isNOTSET[0] = False
            changes = True


        if not changes:
            return self

        if FieldA is not None:
            if not isinstance(FieldA, AStruct):
                raise TypeError(f'FieldA is not a { AStruct !r}.')

        inst = <AStructB>AStructB.__new__(AStructB)
        inst._cpp_obj = move(AStructB._make_instance(
          self._cpp_obj.get(),
          __isNOTSET,
          FieldA,
        ))
        return inst

    @staticmethod
    cdef unique_ptr[cAStructB] _make_instance(
        cAStructB* base_instance,
        bint* __isNOTSET,
        AStruct FieldA 
    ) except *:
        cdef unique_ptr[cAStructB] c_inst
        if base_instance:
            c_inst = make_unique[cAStructB](deref(base_instance))
        else:
            c_inst = make_unique[cAStructB]()

        if base_instance:
            # Convert None's to default value. (or unset)
            if not __isNOTSET[0] and FieldA is None:
                deref(c_inst).FieldA.reset()
                pass

        if FieldA is not None:
            deref(c_inst).FieldA = const_pointer_cast((<AStruct?>FieldA)._cpp_obj)
        # in C++ you don't have to call move(), but this doesn't translate
        # into a C++ return statement, so you do here
        return move_unique(c_inst)

    def __iter__(self):
        yield 'FieldA', self.FieldA

    def __bool__(self):
        return <bint>(deref(self._cpp_obj).FieldA)

    @staticmethod
    cdef create(shared_ptr[cAStructB] cpp_obj):
        inst = <AStructB>AStructB.__new__(AStructB)
        inst._cpp_obj = move_shared(cpp_obj)
        return inst

    @property
    def FieldA(self):

        if self.__field_FieldA is None:
            if not deref(self._cpp_obj).FieldA:
                return None
            self.__field_FieldA = AStruct.create(reference_shared_ptr_FieldA(self._cpp_obj, deref(deref(self._cpp_obj).FieldA)))
        return self.__field_FieldA


    def __hash__(AStructB self):
        if not self.__hash:
            self.__hash = hash((
            self.FieldA,
            ))
        return self.__hash

    def __repr__(AStructB self):
        return f'AStructB(FieldA={repr(self.FieldA)})'
    def __copy__(AStructB self):
        cdef shared_ptr[cAStructB] cpp_obj = make_shared[cAStructB](
            deref(self._cpp_obj)
        )
        return AStructB.create(move_shared(cpp_obj))

    def __richcmp__(self, other, op):
        cdef int cop = op
        if not (
                isinstance(self, AStructB) and
                isinstance(other, AStructB)):
            if cop == Py_EQ:  # different types are never equal
                return False
            elif cop == Py_NE:  # different types are always notequal
                return True
            else:
                return NotImplemented

        cdef cAStructB* cself = (<AStructB>self)._cpp_obj.get()
        cdef cAStructB* cother = (<AStructB>other)._cpp_obj.get()
        if cop == Py_EQ:
            return deref(cself) == deref(cother)
        elif cop == Py_NE:
            return deref(cself) != deref(cother)
        elif cop == Py_LT:
            return deref(cself) < deref(cother)
        elif cop == Py_LE:
            return deref(cself) <= deref(cother)
        elif cop == Py_GT:
            return deref(cself) > deref(cother)
        elif cop == Py_GE:
            return deref(cself) >= deref(cother)
        else:
            return NotImplemented

    @staticmethod
    def __get_reflection__():
        return _types_reflection.get_reflection__AStructB()

    cdef __iobuf.IOBuf _serialize(AStructB self, proto):
        cdef __iobuf.cIOBufQueue queue = __iobuf.cIOBufQueue(__iobuf.cacheChainLength())
        cdef cAStructB* cpp_obj = self._cpp_obj.get()
        if proto is __Protocol.COMPACT:
            with nogil:
                serializer.CompactSerialize[cAStructB](deref(cpp_obj), &queue, serializer.SHARE_EXTERNAL_BUFFER)
        elif proto is __Protocol.BINARY:
            with nogil:
                serializer.BinarySerialize[cAStructB](deref(cpp_obj), &queue, serializer.SHARE_EXTERNAL_BUFFER)
        elif proto is __Protocol.JSON:
            with nogil:
                serializer.JSONSerialize[cAStructB](deref(cpp_obj), &queue, serializer.SHARE_EXTERNAL_BUFFER)
        elif proto is __Protocol.COMPACT_JSON:
            with nogil:
                serializer.CompactJSONSerialize[cAStructB](deref(cpp_obj), &queue, serializer.SHARE_EXTERNAL_BUFFER)
        return __iobuf.from_unique_ptr(queue.move())

    cdef cuint32_t _deserialize(AStructB self, const __iobuf.cIOBuf* buf, proto) except? 0:
        cdef cuint32_t needed
        self._cpp_obj = make_shared[cAStructB]()
        cdef cAStructB* cpp_obj = self._cpp_obj.get()
        if proto is __Protocol.COMPACT:
            with nogil:
                needed = serializer.CompactDeserialize[cAStructB](buf, deref(cpp_obj), serializer.SHARE_EXTERNAL_BUFFER)
        elif proto is __Protocol.BINARY:
            with nogil:
                needed = serializer.BinaryDeserialize[cAStructB](buf, deref(cpp_obj), serializer.SHARE_EXTERNAL_BUFFER)
        elif proto is __Protocol.JSON:
            with nogil:
                needed = serializer.JSONDeserialize[cAStructB](buf, deref(cpp_obj), serializer.SHARE_EXTERNAL_BUFFER)
        elif proto is __Protocol.COMPACT_JSON:
            with nogil:
                needed = serializer.CompactJSONDeserialize[cAStructB](buf, deref(cpp_obj), serializer.SHARE_EXTERNAL_BUFFER)
        return needed

    def __reduce__(self):
        return (deserialize, (AStructB, serialize(self)))


IncludedConstant = 42
IncludedInt64 = int
