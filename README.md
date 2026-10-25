# UBold Laravel 13 Admin Panel

這是一套基於 **Laravel 13** 與 **UBold 響應式管理員樣板** 所開發的後台管理系統，整合了 **Laradock (Docker)** 容器化環境、MySQL 資料庫、自訂 Session 驗證機制以及完整的使用者帳號管理 (CRUD) 功能。

---

## 🛠 技術堆疊 (Tech Stack)

* **後端核心**：Laravel 13 / PHP 8.5
* **容器環境**： MySQL
* **前端樣板**：UBold Responsive Admin Dashboard (Converted to Blade)
* **前端互動**：Bootstrap, jQuery, SweetAlert2

---

## 🚀 快速開始與安裝指南 (Getting Started)

請依照以下步驟在本地端透過 Laradock 啟動此專案：

### 1. 複製專案與進入目錄

```bash
git clone <your-repository-url>
cd <your-project-folder>

```

### 2. 環境設定檔 (Environment Configuration)

複製環境變數範本並設定資料庫連線：

```bash
cp .env.example .env

```

修改 `.env` 檔案中的資料庫設定（配合 Laradock 的 MySQL 預設值）：

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_CONNECTION=mysql
DB_USERNAME=root
DB_PASSWORD=root

```

### 3. composer 安裝

```bash
composer install
```

### 4. 產生金鑰與執行資料庫遷移 (Migrations)

仍在 workspace 容器內執行：

```bash
php artisan key:generate
php artisan migrate
php artisan db:seed  #建立測試資料

```


---

## 🌐 存取專案

完成上述步驟後，您即可透過瀏覽器存取：

* **首頁 / 登入頁**：`http://localhost/login`
* **後台管理 / 使用者列表**：`http://localhost/dashboard` *(需登入)*

---

## ✨ 核心功能與特色

1. **自訂安全驗證 (Authentication)**：
* 採用 `Auth` Facade 與 Session 機制實作安全的登入與登出流程。


2. **完整的使用者管理 (CRUD)**：
* **Read**：分頁顯示使用者清單（每頁支援動態分頁筆數）。
* **Create**：透過 Bootstrap Modal 進行彈窗新增，並具備完整的伺服器端驗證。
* **Update**：動態帶入資料的編輯 Modal，支援選擇性修改密碼。
* **Delete**：結合 SweetAlert2 互動確認視窗的安全刪除機制，並內建防呆保護（不可刪除目前登入中的帳號）。


3. **優化的 UBold 介面整合**：
* 完美轉換靜態樣板為 Laravel Blade 結構，並透過 `asset()` 統一管理 CSS、JS 與使用者頭像資源。

# Laravel Blade 使用者管理介面

以 Laravel Blade 與 UBold Admin Dashboard Template 建立的使用者管理頁面範例，將頁面拆分為共用 Layout、導覽列、側邊選單、使用者列表、Modal 與 JavaScript，讓程式碼更容易維護與擴充。

## 功能特色

- 使用者列表卡片
- Laravel 分頁
- 新增使用者 Modal
- 編輯使用者 Modal
- SweetAlert2 刪除確認
- Laravel CSRF Token 與 HTTP Method Spoofing
- Session 成功／失敗訊息提示
- 共用 Navbar、Sidebar、Footer 與 Layout
- 使用 `asset()` 產生靜態資源路徑

## 技術使用

- PHP
- Laravel Blade
- Bootstrap / UBold Admin Template
- jQuery
- SweetAlert2

> 本專案範例沿用 UBold 範本資源。請依你實際安裝的 Laravel、Bootstrap 與 SweetAlert2 版本確認相容性。

## 專案結構

```text
resources/
└── views/
    ├── layouts/
    │   ├── app.blade.php
    │   └── partials/
    │       ├── navbar.blade.php
    │       ├── sidebar.blade.php
    │       └── footer.blade.php
    └── users/
        ├── index.blade.php
        └── partials/
            ├── list.blade.php
            ├── modals.blade.php
            └── scripts.blade.php
```

### 檔案說明

| 檔案 | 說明 |
| --- | --- |
| `layouts/app.blade.php` | 共用頁面結構、CSS、JavaScript 與內容區塊 |
| `layouts/partials/navbar.blade.php` | 頂部導覽列與登出表單 |
| `layouts/partials/sidebar.blade.php` | 左側功能選單 |
| `layouts/partials/footer.blade.php` | 頁尾 |
| `users/index.blade.php` | 使用者管理頁面入口 |
| `users/partials/list.blade.php` | 使用者卡片、搜尋表單與分頁 |
| `users/partials/modals.blade.php` | 新增／編輯使用者 Modal |
| `users/partials/scripts.blade.php` | 編輯資料帶入、刪除確認與 Flash 訊息 |

## 安裝與設定

### 1. 放置 Blade 檔案

將 `resources/views/` 內的檔案複製到 Laravel 專案對應路徑。

### 2. 放置 UBold 靜態資源

此範例預期 UBold 資源位於：

```text
public/assets/
├── css/
├── js/
├── images/
└── libs/
    └── sweetalert2/
```

如果你的資源目錄不同，請調整 `asset()` 路徑。

### 3. 設定路由

此範例使用以下命名路由：

- `users.index`
- `users.store`
- `users.update`
- `users.destroy`
- `logout`

若你已經有對應路由，請勿重複宣告。可以用以下指令確認：

```bash
php artisan route:list --path=users
php artisan route:list --name=logout
```

若使用 Resource Controller，路由設定可以參考：

```php
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class);
```

請依照你的 Controller 命名空間與既有路由調整。

### 4. Controller 傳入分頁資料

`users.index` 頁面預期收到 `$users` 分頁物件，例如：

```php
use App\Models\User;

public function index()
{
    $users = User::paginate(9);

    return view('users.index', compact('users'));
}
```

如果你的 `User` Model 或 Controller 位於不同命名空間，請依專案實際結構調整。

### 5. Bootstrap 分頁樣式

如果專案使用 Bootstrap 4 樣式，可在 `App\Providers\AppServiceProvider` 的 `boot()` 設定：

```php
use Illuminate\Pagination\Paginator;

public function boot(): void
{
    Paginator::useBootstrapFour();
}
```

請先確認 Laravel 版本是否支援該方法，以及目前使用的 UBold Bootstrap 版本。若使用其他 Bootstrap 版本，請選擇相容的分頁 View。

## 使用者資料欄位

目前頁面會讀取以下使用者屬性：

- `id`
- `name`
- `email`
- `avatar`（登入使用者的頭像）
- `post`
- `followers`
- `followings`

請確認資料表與 Model 有對應欄位。若 `avatar` 儲存的是完整 URL，請調整範例，避免再套用 `asset()`。

## 搜尋功能注意事項

列表中的搜尋表單會透過 GET 傳送 `search` 參數，例如：

```text
/users?search=example
```

要讓搜尋實際過濾資料，請在 `UserController@index` 中加入對 `search` 參數的查詢處理；目前 Blade 表單本身不會自動完成後端搜尋。

## 刪除流程

刪除表單使用 Laravel 標準寫法：

```blade
<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="button" class="js-delete-user">刪除</button>
</form>
```

按下刪除按鈕後，JavaScript 會顯示 SweetAlert2 確認視窗，確認後送出表單。請確認 `UserController@destroy` 有實作刪除流程，且使用者有相應權限。

## 編輯功能注意事項

編輯 Modal 會將按鈕上的 `data-*` 屬性填入表單，再送出 `PUT` 請求。後端 `UserController@update` 需要：

- 驗證輸入資料
- 更新允許修改的欄位
- 正確處理密碼留空的情況（留空時是否保留原密碼由 Controller 決定）
- 檢查授權與錯誤處理

## 開發提醒

- 不要將密碼或 `.env` 等機密資訊提交到 GitHub。
- 請在正式環境確認登入、授權、表單驗證與錯誤訊息。
- 這份程式碼是 UI/Blade 重構範例，仍需整合你實際的 Controller、Model、資料表與路由後測試。

