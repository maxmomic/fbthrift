# encoding: ascii-8bit
# Copyright (c) Facebook, Inc. and its affiliates.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

module Thrift
  class BaseServerTransport
    def listen
      raise NotImplementedError
    end

    def accept
      raise NotImplementedError
    end
      
    def close; nil; end

    def closed?
      raise NotImplementedError
    end
  end
end
