
[](https://lunatio.com/)

Lunatio

-   [Products](https://lunatio.com/)
-   [Services](https://lunatio.com/services)
-   [Newsletter](https://mailchi.mp/432dbe7c7136/lunatio)
-   [Contact](https://lunatio.com/contact)

[phpShort](https://lunatio.com/phpshort)

-   [Overview](https://lunatio.com/phpshort)
-   [Changelog](https://lunatio.com/phpshort/changelog)
-   [Documentation](https://lunatio.com/phpshort/documentation)
-   [Demo](https://phpshort.lunatio.com/)
-   [Buy](https://1.envato.market/phpshort-regular)

# Documentation

-   [Getting started](https://lunatio.com/phpshort/documentation#getting-started)
    -   [Introduction](https://lunatio.com/phpshort/documentation#introduction)
    -   [Requirements](https://lunatio.com/phpshort/documentation#requirements)
-   [Installation](https://lunatio.com/phpshort/documentation#installation)
    -   [Creating the database](https://lunatio.com/phpshort/documentation#creating-the-database)
    -   [Uploading the files](https://lunatio.com/phpshort/documentation#uploading-the-files)
    -   [Configuring the files](https://lunatio.com/phpshort/documentation#configuring-the-files)
    -   [Changing the public directory](https://lunatio.com/phpshort/documentation#changing-the-public-directory)
    -   [Finishing the installation](https://lunatio.com/phpshort/documentation#finishing-the-installation)
-   [Configuration](https://lunatio.com/phpshort/documentation#configuration)
    -   [Cron job](https://lunatio.com/phpshort/documentation#cron-job)
    -   [Email](https://lunatio.com/phpshort/documentation#email)
    -   [Authentication](https://lunatio.com/phpshort/documentation#authentication)
    -   [Captcha](https://lunatio.com/phpshort/documentation#captcha)
    -   [Payment processors](https://lunatio.com/phpshort/documentation#payment-processors)
    -   [Advanced](https://lunatio.com/phpshort/documentation#advanced)
-   [Update](https://lunatio.com/phpshort/documentation#update)
    -   [Backing up](https://lunatio.com/phpshort/documentation#backing-up)
    -   [Updating](https://lunatio.com/phpshort/documentation#updating)
-   [FAQ](https://lunatio.com/phpshort/documentation#faq)

## Getting started

### Introduction

This page describes the installation and configuration steps of  [phpShort](https://lunatio.com/phpshort)  software.

If you're not familiar with the instructions on this page, we offer installation  [Services](https://lunatio.com/services), for an additional fee.

### Requirements

Before installing the software, please make sure your server meets the requirements below.

Software

Modules

PHP 8.1.x

BCMath, Ctype, Fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML, GD, cURL

Apache 2+

mod_rewrite

MySQL 5.7.7+  
MariaDB 10.3.17+

----------

## Installation

### Creating the database

1.  Create a new MySQL database.
2.  Create a new MySQL username and password.
3.  Assign full privileges to your database username.

Useful resources

[cPanel - MySQL database wizard](https://docs.cpanel.net/cpanel/databases/mysql-database-wizard/)

[Plesk - Website databases](https://docs.plesk.com/en-US/obsidian/customer-guide/website-databases.69535/)

### Uploading the files

Before starting to upload the files, please make sure your file explorer has the option to view hidden files turned on. On some operating systems, the dotfiles are hidden by default.

Upload what's inside the  `Software`  folder on the web root folder of your domain. This folder is generally called  `public_html`,  `html`, or  `example.com`, but depending on your server's configuration, it might be named differently.

Useful resources

[cPanel - File Manager](https://docs.cpanel.net/cpanel/files/file-manager/#overview)

[Plesk - Uploading content with File Manager](http://docs.plesk.com/en-US/12.5/customer-guide/websites-and-domains/website-content/uploading-content-with-file-manager.74105/)

### Configuring the files

Set the access permissions (CHMOD) to  `775`  to the following files and folders:

-   Files
    -   .env
-   Folders
    -   bootstrap/cache
    -   lang
    -   public/uploads/brand
    -   storage
    -   storage/framework/
    -   storage/framework/cache
    -   storage/framework/cache/data
    -   storage/framework/sessions
    -   storage/framework/views
    -   storage/logs

Useful resources

[cPanel - Update file or folder permissions](https://docs.cpanel.net/cpanel/files/file-manager/#update-file-or-folder-permissions)

[Plesk - Setting file and directory access permissions](http://docs.plesk.com/en-US/12.5/customer-guide/websites-and-domains/website-content/setting-file-and-directory-access-permissions.70738/)

### Changing the public directory

Configure your web server's document / web root to point to the  `/public`  directory of the software. For example, if you've uploaded the software in  `example.com`  folder, your web directory should be changed to  `example.com/public`  folder.

Useful resources

[cPanel - New document root](https://docs.cpanel.net/cpanel/domains/domains/#new-document-root)

[Plesk - Defining a custom document root](https://docs.plesk.com/en-US/obsidian/administrator-guide/77500/)

### Finishing the installation

1.  Go to  `https://example.com/install`  and follow the installation wizard to complete the installation.
2.  After you've installed the software, login into your user account.
3.  Once logged-in, go to  `https://example.com/admin`  and activate your  [License Key](https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-).

Useful resources

[Envato - Retrieving the license key](https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-)

----------

## Configuration

### Cron job

The software requires a cron job task to be set up on your server in order to automate some of its functions.

1.  Go to  Admin  Settings  Cron job.
2.  Copy the  `Command`  field and set up a cron job for it that runs every minute.

Useful resources

[cPanel - Cron jobs](https://docs.cpanel.net/cpanel/advanced/cron-jobs/#add-a-cron-job)

[Plesk - Scheduling tasks](https://docs.plesk.com/en-US/obsidian/administrator-guide/server-administration/scheduling-tasks.64993/)

### Email

1.  Go to  Admin  Settings  Email.
2.  Change the  `Driver`  field value to  SMTP.
3.  Fill in the rest of the fields with the SMTP credentials from your SMTP provider.

### Authentication

#### Google

1.  Login into your  [Google Cloud Console](https://console.cloud.google.com/)  account.
2.  Create a  [New Project](https://console.cloud.google.com/projectcreate).
3.  Go to  [APIs and Services](https://console.cloud.google.com/apis/dashboard).
4.  From the sidebar, go to  [OAuth Consent Screen](https://console.cloud.google.com/apis/credentials/consent)  section.
5.  Set the  `User Type`  field value to  External  and click on  Create  button.
6.  Fill in your app details, and click on  Save and continue  button.
7.  On the  Scopes  section, click on  Add or remove scopes  button and select the  userinfo.email  and  userinfo.profile  scopes, and complete the remaining steps.
8.  From the sidebar, go to  [Credentials](https://console.cloud.google.com/apis/credentials)  section.
9.  Click on  Create credentials  button and then select  [OAuth client ID](https://console.cloud.google.com/apis/credentials/oauthclient).
10.  Set the  `Application type`  field value to  Web application.
11.  On the  `Authorized redirect URIs`  field paste your redirect URL, which can be found in  Admin  Settings  Authentication  Google.
12.  Copy the  `Client ID`  and the  `Client secret`  in  Admin  Settings  Authentication  Google.

#### Microsoft

1.  Login into your  [Microsoft Azure](https://portal.azure.com/)  account.
2.  Go to  [App registrations](https://portal.azure.com/#view/Microsoft_AAD_RegisteredApps/ApplicationsListBlade)  and click on  [New registration](https://portal.azure.com/#view/Microsoft_AAD_RegisteredApps/CreateApplicationBlade/quickStartType~/null/isMSAApp~/false)  button.
3.  Set the  `Supported account types`  field value to  Personal Microsoft accounts only.
4.  Set the  `Platform`  field to  `Web`, and on the  `Redirect URI`  field paste your redirect URL, which can be found in  Admin  Settings  Authentication  Microsoft.
5.  Go to  [App registrations](https://portal.azure.com/#view/Microsoft_AAD_RegisteredApps/ApplicationsListBlade), click on  All applications  tab, and select your application.
6.  Copy the  `Application (client) ID`  in  Admin  Settings  Authentication  Microsoft.
7.  From the sidebar, go to  Certificates & secrets  section, and then click on the  New client secret  button.
8.  Copy the  Client secret  `Value`  in  Admin  Settings  Authentication  Microsoft.

#### Apple

1.  Login into your  [Apple developer](https://developer.apple.com/account)  account.
2.  Go to  [Apple Membership](https://developer.apple.com/account)  section.
3.  Copy the  `Team ID`  in  Admin  Settings  Authentication  Apple.
4.  Go to  [Identifiers](https://developer.apple.com/account/resources/identifiers/list)  and then click on the  [Plus](https://developer.apple.com/account/resources/identifiers/add/bundleId)  button.
5.  Register a new  [App ID](https://developer.apple.com/account/resources/identifiers/bundleId/add/bundle), with the  Sign in with Apple  feature enabled under the  `Capabilities`  field.
6.  Go to  [Identifiers](https://developer.apple.com/account/resources/identifiers/list)  section, and then click on the  [Plus](https://developer.apple.com/account/resources/identifiers/add/bundleId)  button.
7.  Register a new  [Service ID](https://developer.apple.com/account/resources/identifiers/serviceId/add/), and then select it from the list.
8.  Enable the  Sign in with Apple  option, and click on  Configure  button, and on the  `Return URLs`  field paste your redirect URL, which can be found on  Admin  Settings  Authentication  Apple.
9.  Copy the  Service ID  `Identifier`  in  Admin  Settings  Authentication  Apple.
10.  Go to  [Keys](https://developer.apple.com/account/resources/authkeys/list)  section, and then click on the  [Plus](https://developer.apple.com/account/resources/identifiers/add/bundleId)  button.
11.  Enable the  Sign in with Apple  option, and click on  Configure  button, and set the  `Primary App ID`, and create your key.
12.  Copy the  `Key ID`  in  Admin  Settings  Authentication  Apple.
13.  Click on the  Download  button, and with a text editor open the downloaded file, and copy the  `Private key`  content in  Admin  Settings  Authentication  Apple.

### Captcha

#### reCAPTCHA

1.  Login into your  [Google reCAPTCHA](https://www.google.com/recaptcha/admin/create)  account.
2.  Click on  [Create](https://www.google.com/recaptcha/admin/create)  button to register a new site.
3.  Set the  `reCAPTCHA type`  field value to  Challenge (v2), and then to  Invisible reCAPTCHA badge, and fill in the rest of the fields.
4.  Copy the  `Site key`  and the  `Secret key`  in  Admin  Settings  Captcha.
5.  Change the  `Driver`  field value to  reCAPTCHA  in  Admin  Settings  Captcha.

#### hCaptcha

1.  Login into your  [hCaptcha](https://dashboard.hcaptcha.com/login)  account.
2.  Create a new  [Site](https://dashboard.hcaptcha.com/sites/new).
3.  Fill all the other fields with the requested information.
4.  Copy the  `Site key`  in  Admin  Settings  Captcha.
5.  From the  [Settings](https://dashboard.hcaptcha.com/settings)  page, copy the  `Secret key`  in  Admin  Settings  Captcha.
6.  Change the  `Driver`  field value to  hCaptcha  in  Admin  Settings  Captcha.

#### Turnstile

1.  Login into your  [Cloudflare](https://dash.cloudflare.com/login)  account.
2.  From the sidebar, go to the  Turnstile  section.
3.  Click on  Add site.
4.  Set the  `Widget Mode`  field value to  Invisible, and fill in the rest of the fields.
5.  Copy the  `Site key`  and the  `Secret key`  in  Admin  Settings  Captcha.
6.  Change the  `Driver`  field value to  `Turnstile`  in  Admin  Settings  Captcha.

### Payment processors

To enable any of the payment processors, an  Extended  license is required. The payment processors can be enabled from  Admin  Settings  Payment processors.

#### PayPal

1.  Login into your  [PayPal](https://developer.paypal.com/developer/applications)  account.
2.  Go to the  [My apps & credentials](https://developer.paypal.com/developer/applications)  section, click on  Live  button and then on the  Create app  button.
3.  Copy the  `Client ID`  and  `Secret`  in  Admin  Settings  Payment processors  PayPal.
4.  Go to the  [My apps & credentials](https://developer.paypal.com/developer/applications)  section, click on  Live  button and then select your app.
5.  Scroll down to  LIVE WEBHOOKS  and click on the  Add webhook  button.
6.  On the  `Webhook URL`  field paste your webhook URL, this can be found on  Admin  Settings  Payment processors  PayPal.
7.  Under the  Events types  select  All events  and save your changes.
8.  Go to the  [My apps & credentials](https://developer.paypal.com/developer/applications)  section, click on  Live  button and then select your app.
9.  Copy the  `Webhook ID`  in  Admin  Settings  Payment processors  PayPal.

#### Stripe

1.  Login into your  [Stripe](https://dashboard.stripe.com/login)  account.
2.  From the menu bar, go to the  Developers  section of the Stripe dashboard and click on  [API Keys](https://dashboard.stripe.com/account/apikeys).
3.  Copy the  `Publishable key`  and  `Secret key`  in  Admin  Settings  Payment processors  Stripe.
4.  From the menu bar, go to the  Developers  section of the Stripe dashboard and click on  [Webhooks](https://dashboard.stripe.com/account/webhooks).
5.  Click on  Add a new endpoint.
6.  On the  `Endpoint URL`  field paste your webhook URL, which can be found on  Admin  Settings  Payment processors  Stripe.
7.  On the  events to listen to  field, click on  Select all events, and click on  Add events  button.
8.  Click on  Add endpoint  button to create your webhook endpoint.
9.  Copy the  `Signing secret`  in  Admin  Settings  Payment processor  Stripe.

#### Razorpay

1.  Login into your  [Razorpay](https://dashboard.razorpay.com/)  account.
2.  From the menu bar, go to the  Settings  section of the Razorpay dashboard and click on  [API Keys](https://dashboard.razorpay.com/app/keys).
3.  Click on  Generate key  button.
4.  Copy the  `Key ID`  and  `Key secret`  in  Admin  Settings  Payment processors  Razorpay.
5.  From the menu bar, go to the  Settings  section of the Razorpay dashboard and click on  [Webhooks](https://dashboard.razorpay.com/app/webhooks).
6.  Click on  Add new webhook.
7.  On the  `Webhook URL`  field paste your webhook URL, which can be found on  Admin  Settings  Payment processors  Razorpay.
8.  On the  Secret  field add your own secret passcode.
9.  On the  Active events  field select all the  Payment events  and  Subscription events.
10.  Click on  Create webhook  button to create your webhook endpoint.
11.  Copy the  `Secret`  passcode in  Admin  Settings  Payment processor  Razorpay.

#### Paystack

1.  Login into your  [Paystack](https://dashboard.paystack.com/)  account.
2.  From the menu bar, go to the  Settings  section of the Paystack dashboard and click on  [API Keys & Webhooks](https://dashboard.paystack.com/#/settings/developer).
3.  Copy the  `Public key`  and  `Secret key`  in  Admin  Settings  Payment processors  Paystack.
4.  From the menu bar, go to the  Settings  section of the Paystack dashboard and click on  [API Keys & Webhooks](https://dashboard.paystack.com/#/settings/developer).
5.  On the  `Webhook URL`  field paste your webhook URL, which can be found on  Admin  Settings  Payment processors  Paystack.

#### Coinbase

1.  Login into your  [Coinbase](https://commerce.coinbase.com/signin)  account.
2.  From the sidebar, go to the  Settings  section of the Coinbase dashboard and scroll down to  API keys.
3.  Create an API key, and copy the key in  Admin  Settings  Payment processors  Coinbase.
4.  From the sidebar, go to the  Settings  section of the Coinbase dashboard and scroll down to  Webhook subscriptions.
5.  Click on  Add an endpoint.
6.  On the  `Endpoint URL`  field paste your webhook URL, this can be found on  Admin  Settings  Payment processors  Coinbase.
7.  From the sidebar, go to the  Settings  section of the Coinbase dashboard and scroll down to  Webhook subscriptions.
8.  Click on  Show shared secret.
9.  Copy the  `Webhook shared secret`  in  Admin  Settings  Payment processors  Coinbase.

#### Crypto.com

1.  Login into your  [Crypto.com](https://merchant.crypto.com/)  account.
2.  From the menu bar, go to the  Integrations  section of the Crypto.com dashboard and click on  [API Keys](https://merchant.crypto.com/integration/api_keys).
3.  Copy the  `Publishable key`  and  `Secret key`  in  Admin  Settings  Payment processors  Crypto.com.
4.  From the menu bar, go to the  Integrations  section of the Crypto.com dashboard and click on  [Webhooks](https://merchant.crypto.com/integration/webhooks).
5.  Click on  Add webhook  button.
6.  On the  `Payload URL`  field paste your webhook URL, which can be found on  Admin  Settings  Payment processors  Crypto.com.
7.  Copy the  `Signature secret`  in  Admin  Settings  Payment processor  Crypto.com.

#### Bank

-   All fields are optional.

### Advanced

#### Google Safe Browsing

1.  Follow the  [Google Safe Browsing](https://developers.google.com/safe-browsing/v4/get-started)  guide to obtain an  API key.
2.  Copy the  `API key`  in  Admin  Settings  Advanced  Google Safe Browsing.

----------

## Update

### Backing up

Before updating the software, you must make a complete backup of your website.

If you've made any modifications to the software's files, your changes will be lost.

### Updating

1.  Make a backup of the  `.env`  config file located on your server.
2.  Upload and replace all the files on your server with what's inside the  `Software`  folder.
3.  Restore your  `.env`  config file on your server.
4.  Go to  `https://example.com/update`  and follow the update wizard.1

1.  Updates that do not have database changes, will not show up in the update wizard.

----------

## FAQ

-   #### I have a support inquiry, a question or a problem, how can I contact you?
    
    You can contact us  [here](https://lunatio.com/contact).
    
-   #### What hosting do you recommend?
    
    We recommend using  [DigitalOcean](https://m.do.co/c/a2590f642b71), as they offer great performance and flexibility at an affordable price.
    
-   #### Is installation included in the price?
    
    No, installation is not included. We offer installation services for an extra fee, please consult our  [Services](https://lunatio.com/services)  section for more details.
    
-   #### How can I translate my website?
    
    Make a copy of the default  `en.json`  language file found in  `/lang`  folder, and change it according to your needs.
    
-   #### Where can I add my custom CSS code?
    
    You can add your custom CSS code in  Admin  Settings  Appearance  Custom CSS  field.
    
-   #### Where can I add my custom JS code?
    
    You can add your custom JS code in  Admin  Settings  General  Custom JS  field.
    
-   #### Where can I add my advertising unit code?
    
    Advertising unit code can be added in the HTML template files.
    
-   #### Where do I find the HTML template files?
    
    The HTML template files can be found in the  `/resources/views`  folder. For example to edit the home page, you would edit the  `/resources/views/home/index.blade.php`  file.
    
-   #### How can I create a custom page?
    
    You can create custom page in  Admin  Pages.
    
-   #### Where can I set up my Terms of Service, Privacy Policy, and Cookies Policy URL pages?
    
    You can paste the links of your legal pages in  Admin  Settings  Legal.
    
-   #### My custom domain is not working, why?
    
    If you're on a managed environment (cPanel, Plesk, etc), you need to manually add your custom domain in your panel, with the same root directory as the software's installation.
    

-   [Products](https://lunatio.com/)
-   [Services](https://lunatio.com/services)
-   [Newsletter](https://mailchi.mp/432dbe7c7136/lunatio)
-   [Contact](https://lunatio.com/contact)

© 2025 Lunatio. All rights reserved.