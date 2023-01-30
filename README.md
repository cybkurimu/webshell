**Table of Contents**
- [01. PHP webshell 概述](#01-php-webshell-概述)

---

**File Suffix:**

- **PHP** .phtml, .php, .php3, .php4, .php5, and .inc
- **asp** .asp, .aspx
- **perl** .pl, .pm, .cgi, .lib
- **jsp** .jsp, .jspx, .jsw, .jsv, and .jspf
- **Coldfusion** .cfm, .cfml, .cfc, .dbm

### 01. PHP webshell 概述

PHP File suffix: https://github.com/hitoriskurimu/webshell/blob/main/php/suffix.txt

**一句话 webshell**

- [php/01.php](php/01.php) -- Single Line Webshell

    ```Plaintext
    Description:
        PASSWORD: krm
        MIME Type: text/php
        Request Method: $_REQUEST

    Args:
        MIME Type:
            image/jpeg
            image/png
            text/plain
        Request Method:
            $_GET
            $_POST
    ```

- [php/01_jpg.php](php/01_jpg.php)

    ```Plaintext
    Description:
        PASSWORD: krm
        MIME Type: text/php
        Request Method: $_REQUEST

    Args:
        MIME Type:
            image/jpeg
            image/png
            text/plain
        Request Method:
            $_GET
            $_POST
    ```

**配置文件覆盖**

- [php/.htaccess](php/.htaccess)

    ```Plaintext
    Description:
        Parse ".l33t" suffix file as PHP file
        MIME type: text/plain
    ```
