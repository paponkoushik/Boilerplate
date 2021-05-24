## Developer guide for `<vue-recaptcha>` component

### Register

```js
import VueRecaptcha from 'vue-recaptcha';
```
```
export default {
        components:{
            VueRecaptcha
        },
   }
```
### Usages example
```
<vue-recaptcha ref="recaptcha"
               @verify="verifyCaptcha"
               :loadRecaptchaScript="true"
               :sitekey="siteKey">
</vue-recaptcha>
```
### Provide the site key here
```
:sitekey="siteKey"
```
### Verification $emit
```
@verify="verifyCaptcha"
```
```
verifyCaptcha(response) {
    console.log(response);
}
```
- Can use backend validation using a property
```
data() {
    return {
        login : {
            email: '', 
            password: '',
            recaptcha: '',
        },
    };
},

methods: {
    verifyCaptcha(response) {
        this.login.recaptcha = response;
        
    },
    submit() {
        this.save(this.login);
    },
}
```

- backend validation rule
```
return [
    'email' => 'required|min:5|email',
    'password'=> 'required|min:3',
    'recaptcha' => 'required'
];
```