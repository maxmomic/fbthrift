/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
#pragma once

#include "thrift/compiler/test/fixtures/deprecated/gen-cpp2/module_types.h"

#include <thrift/lib/cpp2/GeneratedSerializationCodeHelper.h>
#include <thrift/lib/cpp2/gen/module_types_tcc.h>

#include <thrift/lib/cpp2/protocol/BinaryProtocol.h>
#include <thrift/lib/cpp2/protocol/CompactProtocol.h>
#include <thrift/lib/cpp2/protocol/ProtocolReaderStructReadState.h>


namespace apache {
namespace thrift {
namespace detail {

template <>
struct TccStructTraits<::cpp2::House> {
  static void translateFieldName(
      folly::StringPiece _fname,
      int16_t& fid,
      apache::thrift::protocol::TType& _ftype);
};
template <>
struct TccStructTraits<::cpp2::Field> {
  static void translateFieldName(
      folly::StringPiece _fname,
      int16_t& fid,
      apache::thrift::protocol::TType& _ftype);
};

} // namespace detail
} // namespace thrift
} // namespace apache

namespace cpp2 {

template <class Protocol_>
void House::readNoXfer(Protocol_* iprot) {
  apache::thrift::detail::ProtocolReaderStructReadState<Protocol_> _readState;

  _readState.readStructBegin(iprot);

  using apache::thrift::TProtocolException;


  if (UNLIKELY(!_readState.advanceToNextField(
          iprot,
          0,
          1,
          apache::thrift::protocol::T_I64))) {
    goto _loop;
  }
_readField_id:
  {
    ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::integral,  ::cpp2::ColorID>::read(*iprot, this->id);
  }

  if (UNLIKELY(!_readState.advanceToNextField(
          iprot,
          1,
          2,
          apache::thrift::protocol::T_STRING))) {
    goto _loop;
  }
_readField_houseName:
  {
    iprot->readString(this->houseName);
  }

  if (UNLIKELY(!_readState.advanceToNextField(
          iprot,
          2,
          3,
          apache::thrift::protocol::T_SET))) {
    goto _loop;
  }
_readField_houseColors:
  {
    this->houseColors = std::set< ::cpp2::ColorID>();
    ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::set<::apache::thrift::type_class::integral>, std::set< ::cpp2::ColorID>>::read(*iprot, this->houseColors.value());
  }

  if (UNLIKELY(!_readState.advanceToNextField(
          iprot,
          3,
          0,
          apache::thrift::protocol::T_STOP))) {
    goto _loop;
  }

_end:
  _readState.readStructEnd(iprot);

  return;

_loop:
  if (_readState.fieldType == apache::thrift::protocol::T_STOP) {
    goto _end;
  }
  if (iprot->kUsesFieldNames()) {
    apache::thrift::detail::TccStructTraits<House>::translateFieldName(_readState.fieldName(), _readState.fieldId, _readState.fieldType);
  }

  switch (_readState.fieldId) {
    case 1:
    {
      if (LIKELY(_readState.isCompatibleWithType(iprot, apache::thrift::protocol::T_I64))) {
        goto _readField_id;
      } else {
        goto _skip;
      }
    }
    case 2:
    {
      if (LIKELY(_readState.isCompatibleWithType(iprot, apache::thrift::protocol::T_STRING))) {
        goto _readField_houseName;
      } else {
        goto _skip;
      }
    }
    case 3:
    {
      if (LIKELY(_readState.isCompatibleWithType(iprot, apache::thrift::protocol::T_SET))) {
        goto _readField_houseColors;
      } else {
        goto _skip;
      }
    }
    default:
    {
_skip:
      iprot->skip(_readState.fieldType);
      _readState.readFieldEnd(iprot);
      _readState.readFieldBeginNoInline(iprot);
      goto _loop;
    }
  }
}

template <class Protocol_>
uint32_t House::serializedSize(Protocol_ const* prot_) const {
  uint32_t xfer = 0;
  xfer += prot_->serializedStructSize("House");
  xfer += prot_->serializedFieldSize("id", apache::thrift::protocol::T_I64, 1);
  xfer += ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::integral,  ::cpp2::ColorID>::serializedSize<false>(*prot_, this->id);
  xfer += prot_->serializedFieldSize("houseName", apache::thrift::protocol::T_STRING, 2);
  xfer += prot_->serializedSizeString(this->houseName);
  if (this->houseColors.hasValue()) {
    xfer += prot_->serializedFieldSize("houseColors", apache::thrift::protocol::T_SET, 3);
    xfer += ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::set<::apache::thrift::type_class::integral>, std::set< ::cpp2::ColorID>>::serializedSize<false>(*prot_, this->houseColors.value());
  }
  xfer += prot_->serializedSizeStop();
  return xfer;
}

template <class Protocol_>
uint32_t House::serializedSizeZC(Protocol_ const* prot_) const {
  uint32_t xfer = 0;
  xfer += prot_->serializedStructSize("House");
  xfer += prot_->serializedFieldSize("id", apache::thrift::protocol::T_I64, 1);
  xfer += ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::integral,  ::cpp2::ColorID>::serializedSize<false>(*prot_, this->id);
  xfer += prot_->serializedFieldSize("houseName", apache::thrift::protocol::T_STRING, 2);
  xfer += prot_->serializedSizeString(this->houseName);
  if (this->houseColors.hasValue()) {
    xfer += prot_->serializedFieldSize("houseColors", apache::thrift::protocol::T_SET, 3);
    xfer += ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::set<::apache::thrift::type_class::integral>, std::set< ::cpp2::ColorID>>::serializedSize<false>(*prot_, this->houseColors.value());
  }
  xfer += prot_->serializedSizeStop();
  return xfer;
}

template <class Protocol_>
uint32_t House::write(Protocol_* prot_) const {
  uint32_t xfer = 0;
  xfer += prot_->writeStructBegin("House");
  xfer += prot_->writeFieldBegin("id", apache::thrift::protocol::T_I64, 1);
  xfer += ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::integral,  ::cpp2::ColorID>::write(*prot_, this->id);
  xfer += prot_->writeFieldEnd();
  xfer += prot_->writeFieldBegin("houseName", apache::thrift::protocol::T_STRING, 2);
  xfer += prot_->writeString(this->houseName);
  xfer += prot_->writeFieldEnd();
  if (this->houseColors.hasValue()) {
    xfer += prot_->writeFieldBegin("houseColors", apache::thrift::protocol::T_SET, 3);
    xfer += ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::set<::apache::thrift::type_class::integral>, std::set< ::cpp2::ColorID>>::write(*prot_, this->houseColors.value());
    xfer += prot_->writeFieldEnd();
  }
  xfer += prot_->writeFieldStop();
  xfer += prot_->writeStructEnd();
  return xfer;
}

extern template void House::readNoXfer<>(apache::thrift::BinaryProtocolReader*);
extern template uint32_t House::write<>(apache::thrift::BinaryProtocolWriter*) const;
extern template uint32_t House::serializedSize<>(apache::thrift::BinaryProtocolWriter const*) const;
extern template uint32_t House::serializedSizeZC<>(apache::thrift::BinaryProtocolWriter const*) const;
extern template void House::readNoXfer<>(apache::thrift::CompactProtocolReader*);
extern template uint32_t House::write<>(apache::thrift::CompactProtocolWriter*) const;
extern template uint32_t House::serializedSize<>(apache::thrift::CompactProtocolWriter const*) const;
extern template uint32_t House::serializedSizeZC<>(apache::thrift::CompactProtocolWriter const*) const;

} // cpp2
namespace cpp2 {

template <class Protocol_>
void Field::readNoXfer(Protocol_* iprot) {
  apache::thrift::detail::ProtocolReaderStructReadState<Protocol_> _readState;

  _readState.readStructBegin(iprot);

  using apache::thrift::TProtocolException;


  if (UNLIKELY(!_readState.advanceToNextField(
          iprot,
          0,
          1,
          apache::thrift::protocol::T_I64))) {
    goto _loop;
  }
_readField_id:
  {
    ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::integral,  ::cpp2::ColorID>::read(*iprot, this->id);
  }

  if (UNLIKELY(!_readState.advanceToNextField(
          iprot,
          1,
          2,
          apache::thrift::protocol::T_I32))) {
    goto _loop;
  }
_readField_fieldType:
  {
    ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::integral, int32_t>::read(*iprot, this->fieldType);
  }

  if (UNLIKELY(!_readState.advanceToNextField(
          iprot,
          2,
          0,
          apache::thrift::protocol::T_STOP))) {
    goto _loop;
  }

_end:
  _readState.readStructEnd(iprot);

  return;

_loop:
  if (_readState.fieldType == apache::thrift::protocol::T_STOP) {
    goto _end;
  }
  if (iprot->kUsesFieldNames()) {
    apache::thrift::detail::TccStructTraits<Field>::translateFieldName(_readState.fieldName(), _readState.fieldId, _readState.fieldType);
  }

  switch (_readState.fieldId) {
    case 1:
    {
      if (LIKELY(_readState.isCompatibleWithType(iprot, apache::thrift::protocol::T_I64))) {
        goto _readField_id;
      } else {
        goto _skip;
      }
    }
    case 2:
    {
      if (LIKELY(_readState.isCompatibleWithType(iprot, apache::thrift::protocol::T_I32))) {
        goto _readField_fieldType;
      } else {
        goto _skip;
      }
    }
    default:
    {
_skip:
      iprot->skip(_readState.fieldType);
      _readState.readFieldEnd(iprot);
      _readState.readFieldBeginNoInline(iprot);
      goto _loop;
    }
  }
}

template <class Protocol_>
uint32_t Field::serializedSize(Protocol_ const* prot_) const {
  uint32_t xfer = 0;
  xfer += prot_->serializedStructSize("Field");
  xfer += prot_->serializedFieldSize("id", apache::thrift::protocol::T_I64, 1);
  xfer += ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::integral,  ::cpp2::ColorID>::serializedSize<false>(*prot_, this->id);
  xfer += prot_->serializedFieldSize("fieldType", apache::thrift::protocol::T_I32, 2);
  xfer += ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::integral, int32_t>::serializedSize<false>(*prot_, this->fieldType);
  xfer += prot_->serializedSizeStop();
  return xfer;
}

template <class Protocol_>
uint32_t Field::serializedSizeZC(Protocol_ const* prot_) const {
  uint32_t xfer = 0;
  xfer += prot_->serializedStructSize("Field");
  xfer += prot_->serializedFieldSize("id", apache::thrift::protocol::T_I64, 1);
  xfer += ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::integral,  ::cpp2::ColorID>::serializedSize<false>(*prot_, this->id);
  xfer += prot_->serializedFieldSize("fieldType", apache::thrift::protocol::T_I32, 2);
  xfer += ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::integral, int32_t>::serializedSize<false>(*prot_, this->fieldType);
  xfer += prot_->serializedSizeStop();
  return xfer;
}

template <class Protocol_>
uint32_t Field::write(Protocol_* prot_) const {
  uint32_t xfer = 0;
  xfer += prot_->writeStructBegin("Field");
  xfer += prot_->writeFieldBegin("id", apache::thrift::protocol::T_I64, 1);
  xfer += ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::integral,  ::cpp2::ColorID>::write(*prot_, this->id);
  xfer += prot_->writeFieldEnd();
  xfer += prot_->writeFieldBegin("fieldType", apache::thrift::protocol::T_I32, 2);
  xfer += ::apache::thrift::detail::pm::protocol_methods< ::apache::thrift::type_class::integral, int32_t>::write(*prot_, this->fieldType);
  xfer += prot_->writeFieldEnd();
  xfer += prot_->writeFieldStop();
  xfer += prot_->writeStructEnd();
  return xfer;
}

extern template void Field::readNoXfer<>(apache::thrift::BinaryProtocolReader*);
extern template uint32_t Field::write<>(apache::thrift::BinaryProtocolWriter*) const;
extern template uint32_t Field::serializedSize<>(apache::thrift::BinaryProtocolWriter const*) const;
extern template uint32_t Field::serializedSizeZC<>(apache::thrift::BinaryProtocolWriter const*) const;
extern template void Field::readNoXfer<>(apache::thrift::CompactProtocolReader*);
extern template uint32_t Field::write<>(apache::thrift::CompactProtocolWriter*) const;
extern template uint32_t Field::serializedSize<>(apache::thrift::CompactProtocolWriter const*) const;
extern template uint32_t Field::serializedSizeZC<>(apache::thrift::CompactProtocolWriter const*) const;

} // cpp2
