## Readykit Apps

### Introduction 

This app will contains the core functionality for apps. Like user role and permissions management, Notification management, Settings etc. The goal of this apps is to provide a minimum interface for developers to start their project.

# Installation

Clone this repository 

```Link will be provided```

Run composer

```composer install```

Run npm

```npm install```

Build CSS and Js by running 

```npm run watch```

Migrate database 

```php artisan migrate```

Seed database with dummy data

```php artisan db:seed```

Or you can run migration and seed together 

```php artisan migrate --seed```

#### Note: All API's link start with domain of your laravel apps 
#### Note: All list is now returning json. We will change it to blade page after we implement the dashboard
### Warning: If you want to use this core in your project. Never ever extend any core base class directly. Like BaseService, BaseRepository etc.


### Roles and Permissions
#### Roles API and resource: 

List page blade location: ```core/auth/role/index```. Permission: view_roles 

List page url(Get request): ```admin/auth/roles``` 

Store role(Post request) 
```
url: admin/auth/roles
role: {
    name: 'Admin',
    type_id: 1,
    is_admin: 1/0 (optional)
    permissions: [
        {
            permission_id: {permission_id},
            meta: [1, 2, 3] (Optional)
        }
    ]
}
Permission: create_roles
```
Update Role(Patch request):
```
url: admin/auth/roles/{id}
role: {
    name: 'Admin',
    type_id: 1,
    is_admin: 1/0 (optional)
    permissions: [
        {
            permission_id: {permission_id},
            meta: [1, 2, 3] (Optional)
        }
    ]
}
Permission: update_roles
``` 

Delete role(Delete request): ```admin/auth/roles/{id}```. Permission: ```delete_roles```

Permission lists(Get request): ```admin/auth/permissions```

Group by added. if you don't want group you can pass. ```?without_group=1```

#### Attach permissions to role
Request type: POST,

URL: ```admin/auth/roles/attach-permissions/{role_id}```

data: 
```json
{
  "permissions" : [
  	 1,2,3 //permission ids
  ]
}
```
or
```json
{
  "permissions" : 1 //permission id
}
```

#### Detach permissions from role
Request type: POST,

URL: ```admin/auth/roles/detach-permissions/{role_id}```

data: 
```json
{
  "permissions" : [
  	 1,2,3 //permission ids
  ]
}
```
or
```json
{
  "permissions" : 1 //permission id
}
```

#### Permission naming convention:
- Roles and permissions are depends on route name. 
- Your route must include a name.
- It can't be more than 2 index. Example: ```brands.list.index``` is not allowed.
- Permission for a route name always formed as action comes to front and name goes to ends
- If the route name is ```brands.index``` your permissions should be ```view_brands```. 
- If your route has only one name the permission name should be manage_{route_name} . Example: ```dashboard``` named route's permission name will be formed as ```manage_dashboard```.
- If any route contains - for it's permission - will changed to _ for example: ```notification-settings.index```  named route permissions wll be ```view_notification_settings```
- For resource routes like ```brands```. The last index of route name like ```store``` of ```brands.store``` will be the first index of permission name and will replaced by ```create```. So the permission name is ```create_brands```
- Replacement for all 2 indexed route name in permission is bellow
```
 'store' -> 'create'
 'index' -> 'view'
 'destroy' -> 'delete'
 'show' -> 'view'
``` 
__Note:__ Route name -> Replacement

__Some example of route name and permission name:__ 

|Route name|Permission name|
|----------|-------------|
| users.index       |  view_users |
| users.create  |    store_users   |
| users.destroy     | delete_users |
| users.update  | update_users | 
| users.show        | view_users | 
| notification-settings.index       | view_notification_settings | 
| dashboard  | manage_dashboard | 


### Users:
#### User API and Resource

#### User list:

Request type: GET

URL: ```admin/auth/users```

#### Create an user:

Request type: POST

URL: ```admin/auth/users```

Body:
 
```
{
    first_name: {first_name},
    last_name: {last_name},
    password: {password},
    email: {email},
    roles: [role_id1, role_id2, ...] (optional)
}
```

#### Update an user:

Request type: PATCH/PUT

Url: ```admin/auth/users/{id}```

Body:
 
```
{
    first_name: {first_name},
    last_name: {last_name},
    password: {password},
    email: {email},
    roles: [role_id1, role_id2, ...] (optional)
}
```

### Delete an user: 
Request type: DELETE

Url: ```admin/auth/users/{id}```


### Attach roles: 
Request type: POST

Url: ```admin/auth/users/attach-roles/{user_id}```

Data: 

```
{ 
    roles: 2 
}
```
or
```
{ 
    roles: [role_id1, role_id2]
}
```

### Detach roles

Url: ```admin/auth/users/detach-roles/{user_id}```

Data: 

```
{ 
    roles: 2 
}
```
or
```
{ 
    roles: [role_id1, role_id2]
}
```


#### User setting list

Request type: GET

URL: ```admin/auth/users/settings```

#### Change user settings
Request type: POST

Url: ```admin/auth/users/change-settings```

Data:
 
```json5
{
    "gender": "male/female/other",
    "date_of_birth": "06-11-1996",
    "contact": '',
    "address": '',
    "email" : "your-email@example.com",
    "first_name": "first_name",
    "last_name": "last_name"
}
```
#### Change Password
Request type: POST

Url: ```admin/auth/users/{user}/password/change```

Data:
 
```json5
{
    old_password: '',
    password: 'password',
    password_confirmation: 'same password'
}
```

### User login api
Page url: ```admin/users/login ```(Get request)

url: ```/admin/users/login``` (post request)
data: 
```json
{
  "email": "example@example.com",
  "password": "secret"
}
```

### User log out API
Request type: GET

url: ``` admin/log-out```

### Logged in user API
Request type: GET

url: ```admin/authenticate-user```

### Change user profile picture
Request type: 'POST'

url: ```/admin/auth/users/profile-picture```
data: 
```
{
    email: ''
}
```

Data must be formData object

data:

```json
{
  "profile_picture": "formData file object"
}
``` 
### User invite API
Request type: POST,

Url: ```admin/auth/users/invite-user```

Data: 
```json
{
  "email": "youremail@example.com", 
  "roles": [1, 2, 4]
}
```

### Cancel user invitation

URl: ```admin/auth/users/cancel-invitation/{id}```

Note: Only invited status user can be canceled 

### Confirm invited user API
Request type: POST
URL: ```users/confirm```
Data: 
```json
{
    "invitation_token" : "user invitation token from email",
    "first_name": "User first name",
    "password" : "AQ#asdq34ewqe4rwefsd",
    "password_confirmation": "AQ#asdq34ewqe4rwefsd"
}
```

### Password reset API 
If you want to redirect to new page when user clicks on reset password button use ```users/password-reset``` url

#### To request for a new reset password email
url: ```users/password-reset```

Request type: 'POST'

data: 
```
{
    email: 'reqquired'
}
```

#### To update the password 
url: ```users/reset-password```

Request type: 'POST'

data: 
```
{
    email: 'required',
    token: 'required',
    password: 'required',
    password_confirmation: 'required'
}
```
Note: If you are using queue to proccess your email job. User invitation and password reset queue is high priority Queue. Check laravel docs for queue priority and also you have to migrate before you continue

### Custom Field Builder: 
#### Custom Field builder API and Resource

Request Type: GET 

URL: ```/admin/app/custom-fields```  

Result:
```
[
  {
    "name": "marked_as",
	"context": "campaign",
	"in_list": 1,
	"is_for_admin": 0
  },
  ...
]
```

Request Type: POST
 
URL: ```/admin/app/custom-fields```  

Body:
```json5
{
    "custom_field_type_id":  1,
    "created_by": 1,
    "name": "marked_as",
    "context": "campaign",
    "meta": "",  //optional
    "in_list": 1,
    "is_for_admin": 0 
}
```

Result: 

```json5
{
    "status": true,
    "message": "Custom field has been updated successfully",
    "field": {
        "name": "marked_as",
        "context": "campaign",
        //...
    }
}
```
Request Type: PUT, PATCH
 
URL: ```/admin/app/custom-fields/{id}``` 

Body:
```
{
  "context": "customers",
  ...
}
```

Result: 

```
{
    "status": true,
    "message": "Custom field Type has been updated successfully",
    "field": {
        ...
    }
}
```

Request Type: DELETE
 
URL: ```/admin/app/custom-fields/{custom-field}``` 

Result:
```json
{
    "status": true,
    "message": "Custom field has been deleted successfully"
}
```

#### Custom Field builder types API and Resource
Request Type: GET
 
URL: ```/admin/app/custom-field-types``` 

Result:
```
[
  {"name":  "textarea"},
  ...
]
```

Request Type: POST
 
URL: ```/admin/app/custom-field-types``` 

Body:
```json
{
  "name": "radio_button"
}
```

Result: 

```
{
    "status": true,
    "message": "Custom field Type has been created successfully",
    "type": {
        "name": "radio_button",
        ...
    }
}
```
Request Type: PUT/PATCH
 
URL: ```/admin/app/custom-field-types/{custom-fields-type}``` 

Body:
```json
{
  "name": "checkbox"
}
```

Result: 

```json5
{
    "status": true,
    "message": "Custom field Type has been updated successfully",
    "type": {
       //...
    }
}
```

Request Type: DELETE
 
URL: ```/admin/app/custom-fields-types/{custom-fields-type}``` 

Result:
```json
{
    "status": true,
    "message": "Custom field Type has been deleted successfully"
}
```


### Global Settings: 
#### Settings API and Resource

#### All settings
Request Type: GET
 
URL: ```/admin/app/settings``` 

Data must be formData object
Result:
```json5
{
    "company_name": "Gaion Solution",
    "company_logo": null,
    "language": "en",
    "date_format": "d-m-Y",
    "time_format": "h",
    "time_zone": "Asia/Dhaka",
    "currency_symbol": "$",
    "decimal_separator": ".",
    "thousand_separator": ",",
    "number_of_decimal": "2",
    "currency_position": "prefix_with_space"
}
```

### Update settings
Request Type: POST
 
URL: ```/admin/app/settings``` 

Body:
```json5
{
    "company_name": "Gaion Solution",
    "company_logo": "Must be a File FormData object",
    "language": "en",
    "date_format": "d-m-Y",
    "time_format": "h",
    "time_zone": "Asia/Dhaka",
    "currency_symbol": "$",
    "decimal_separator": ".",
    "thousand_separator": ",",
    "number_of_decimal": "2",
    "currency_position": "prefix_with_space"
}
```

Result: 

```json5
{
    "status": true,
    "message": "Setting has been updated successfully",
}
```

### Delivery settings
Request type: GET

URL: ```admin/app/settings/delivery-settings``` (Default mail settings)

For provider: ```admin/app/settings/delivery-settings/{Your provider name}```

### Update delivery settings
Request type: POST

Url: ```admin/app/settings/delivery-settings``` 

#### Data: 
Common and optional 

```json
{
    "form_name": "Anything",
    "from_email": "Something@s.com"
}
```
Only for mailgun
```json5
{
    "provider": "mailgun",
    "domain_name": "https://thisisdomain.com",
    "api_key": "secret",
}
```
Only for amazon ses

```json
{
    "hostname": "",
    "access_key_id": "",
    "secret_access_key": "",
    "provider": "amazon_ses"
}
```

### Template CRUD
#### List of template
Request type: GET

URL: ```admin/app/templates```

#### Store template
Request type: POST

URL: ```admin/app/templates```

data: 
```json
{
  "subject": "", //optional
  "custom_content": ""
}
``` 

#### Update template
Request type: PATCH

URL: ```admin/app/templates/1```

data: 
```json
{
  "subject": "", //optional
  "custom_content": ""
}
``` 

#### Delete template 
Request type: DELETE

URL: ```admin/app/templates/1```

### Status Resource
Request Type: GET
 
URL: ```/admin/app/statuses``` 

Result:
```json5
[
    { "name": "active", "class": "primary"},
    { "name": "inactive", "class": "muted"},
    { "name": "pending", "class": "warning" },
    { "name": "processing", "class": "warning", "type": "campaign"},
]
```

### Type Resource
Request Type: GET
 
URL: ```/admin/app/types``` 

Result:
```json5
[
    { "name": "app" },
    { "name": "brand" },
    { "name": "subscriber" }
]
```

### Activity Log Resource
Request Type: GET
 
URL: ```/admin/app/activity-logs``` 

Result:
```
[
    {
        "id": "26",
        "log_name": "default",
        "description": "created",
        "subject_id": "13",
        "subject_type": "App\\Models\\Core\\Auth\\Role",
        "causer_id": "1",
        "causer_type": "App\\Models\\Core\\Auth\\User",
        "properties": "{
            "old": {
                ...
            },
            "attributes": {
               "email": "admin@admin.com",
               "last_name": "Admin",
               "first_name": "Super"
            }
        }",
        "created_at": "2020-02-24 10:28:56",
        "updated_at": "2020-02-24 10:28:56"
    }
  ...
]
```

### Only authenticate user activity
Request type: GET,

URL: ```admin/user/activity-log```

### Notification

#### Notification events Resource


Request Type: GET
 
URL: ```/admin/app/notification-events``` 

Result:
```json5
[
    { "name": "user_created" },
    { "name": "brand_created" },
    { "name": "brand_updated" },
  //...
]
```

#### Notification channels Resource
Request Type: GET
 
URL: ```/admin/app/notification-channels``` 

Result:
```json5
[
    { "name": "database" },
    { "name": "sms" },
    { "name": "email" }
]
```

#### Notification settings API Resources
Request Type: GET
 
URL: ```/admin/app/notification-settings``` 

Result:
```json5
[
    {
        "notification_event_id": 2,
        "updated_by": 1,
        "created_by": 1
        "notify_by": "",
    },
  //...
]
```

Request Type: POST
 
URL: ```/admin/app/notification-settings``` 

Body:
```json5
{
    "notification_event_id": 2,
    "updated_by": 1, //optional
    "created_by": 1,
    "notify_by": "", //List of notification channels
    "audiences": [
        {
            "notification_setting_id": "",
            "audience_type": "users", // roles/users
            "audiences": [1, 4, 7] // id of users
        }
    ]
}
```
Result: 

```json5
{
    "status": true,
    "message": "Notification Settings has been updated successfully",
    "setting": {
        // ...
    }
}
```
Request Type: PUT, PATCH
 
URL: ```/admin/app/notification-settings/{notification-setting}``` 

Body: Same as POST body.

Result: 

```json5
{
    "status": true,
    "message": "Notification Setting has been updated successfully",
    "setting": {
        // ...
    }
}
```

Request Type: DELETE
 
URL: ```/admin/app/notification-settings/{notification-setting}``` 

Result:
```json5
{
    "status": true,
    "message": "Notification Setting has been deleted successfully"
}
```

#### Notification template Resource


Request Type: GET
 
URL: ```/admin/app/notification-templates/``` 

Result:
```json5
[
    {
        "id": 1,
        "subject": "New Year Campaign Has Started",
        "default_content": "<h2>Happy New Year Folks</h2>",
        "custom_content": "<p>Lorem ipsum dolor sit amet</p>",
        "type": "email",
    },
  //...
]
```

Request Type: POST
 
URL: ```/admin/app/notification-templates``` 

Body:
```json5
{
    "subject": "Christmas Campaign Has Started",
    "custom_content": "<p>Lorem ipsum dolor sit amet</p>",
    "type": "email", // sms/email/database (Required)
}
```
Result: 

```json5
{
    "status": true,
    "message": "Notification Template has been updated successfully",
    "templates": {
        // ...
    }
}
```
Request Type: PUT, PATCH
 
URL: ```/admin/app/notification-templates/{notification-template}``` 

Body: Same as POST body.

Result: 

```json5
{
    "status": true,
    "message": "Notification template has been updated successfully",
    "templates": {
        // ...
    }
}
```

Request Type: DELETE
 
URL: ```/admin/app/notification-templates/{notification-template}``` 

Result:
```json5
{
    "status": true,
    "message": "Notification template has been deleted successfully"
}
```


#### Attach Notification Templates to Event: 
Request type: POST

URL: ```/admin/app/notification-events/{event}/attach-templates```

Body: 

```json5
{ 
  "templates": [
    1, 3, 4 // Notification Template ids
  ]
}
```
or
```json5
{ 
    "templates": 4
}
```

#### Detach Notification Templates to Event 

Request type: POST

URL: ```/admin/app/notification-events/{event}/detach-templates```

Body: 

```json5
{ 
  "templates": [
    1, 3, 4 // Notification Template ids
  ]
}
```
or
```json5
{ 
    "templates": 4
}
```

### Notification Helper and BaseNotification Class

```php
notify()
    ->on('user_updated')
    ->with($user)
    ->send(UserNotification::class);
```

The above code itself self explanatory. ```notify()``` helper method will give a an instance of NotificationHelper. Look at the definition for insight.
the on method itself is event holder this event will come from database defined by us. User will get notification based on this event. 
See the definition for more info. With method is the method which will give you an access to pass data to your notification class. 
Send method is the method will hold the notification class. Please look at the definition for more insight.

#### BaseNotificationClass
This class look like bellow 

```php
abstract class BaseNotification extends Notification
{
    use Queueable;

    public $auth;

    public $templates;

    public $via;

    public $model;

    public $mailView;

    public $databaseNotificationUrl = null;

    public $mailSubject = null;

    public $databaseNotificationContent;

    public $nexmoNotificationContent;

    public function __construct()
    {
        $this->parseNotification();
    }

    public function via($notifiable)
    {
        return $this->via;
    }


    public function toMail($notifiable)
    {
        $template = $this->template()->mail();
        return (new MailMessage)
            ->view($this->mailView, [
                'model' => $this->model,
                'template' => $template->custom_content ?? $template->default_content
            ])
            ->subject($this->mailSubject);
    }

    public function toDatabase($notifiable)
    {
        return [
            "message" => $this->databaseNotificationContent,
            "name" => $notifiable->name,
            "url" => $this->databaseNotificationUrl,
            "notify_by" => $this->auth->name,
        ];

    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage())
            ->content($this->nexmoNotificationContent);
    }

    public function template()
    {
        return new NotificationTemplateHelper($this->templates);
    }

    /**
     * This function must assign value to class variable which is needed to send your notification
     */
    abstract public function parseNotification();

}

```

Just read the whole code. This class is abstract class which will held all laravel notification channel definition.
And there is only one abstract method which is ParseNotification. Look at the UserNotification in core folder. There is a defination for this class. 

### User notifications

List of notification: 

Request type: GET

URL: ```admin/user/notifications```

Mark as read:

Request type: POST

URL: ```admin/user/notifications/mark-as-read/{notification_id}```

Mark as read:

Request type: POST

URL: ```admin/user/notifications/mark-all-as-read```

Mark as unread:

Request type: POST

URL: ```admin/user/notifications/mark-as-unread/{notification_id}```

```
### License 
All copyrights reserved by Author. You will be needing a corporate license agreement to use this product. 

