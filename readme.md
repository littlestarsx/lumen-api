# Lumen + Dingo Api + Jwt 

### 克隆

```shell
git clone https://github.com/littlestarsx/lumen-api.git

```

### 安装依赖

```shell
composer install
```

### 配置

```shell
cp .env.example .env

#增加Dingo Api配置
#访问api.test.com/api/test
#API_PREFIX=api
#访问api.test.com/test
API_DOMAIN=api.test.com
API_STANDARDS_TREE=vnd
API_SUBTYPE=lumen-api
API_VERSION=v1
API_NAME="Lumen Api"
#条件请求，默认开启可以关闭
API_CONDITIONAL_REQUEST=false
#严格模式
API_STRICT=false
API_DEBUG=true
```
