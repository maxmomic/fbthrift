/*
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

#include <thrift/lib/cpp2/async/ClientChannel.h>

#ifdef __linux__
#include <sys/utsname.h>
#endif

#include <thrift/lib/cpp2/PluggableFunction.h>

namespace apache {
namespace thrift {
namespace {
THRIFT_PLUGGABLE_FUNC_REGISTER(std::optional<std::string>, getClientHostId) {
#ifdef __linux__
  struct utsname bufs;
  ::uname(&bufs);
  return bufs.nodename;
#else
  return {};
#endif
}
} // namespace

/* static */ const std::optional<std::string>& ClientChannel::getHostId() {
  static const auto& hostId =
      *new std::optional<std::string>{THRIFT_PLUGGABLE_FUNC(getClientHostId)()};
  return hostId;
}
} // namespace thrift
} // namespace apache
