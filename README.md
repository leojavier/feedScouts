# Instagram feed APP
##### Version 1.0.3

###Dependencies to run the App

  - NodeJS V0.10.31
  - NPM V1.4.23
  - Bower V1.3.12
  - grunt-cli v0.1.13
  - grunt v0.4.5

### Installation

You need Gulp installed globally:

```sh
$ npm install
$ bower install
```
### To Run the project
```sh
$ grunt serve
```
### To Build the project
```sh
$ grunt build
```
### Instruction
(This version will not have any domain restriction)
```sh
<iframe style="width:100%; padding:0; height:auto;" src="index.html" frameborder="0" scrolling="no" onload='javascript:FeedScouts.resizeIframe(this);'></iframe>
```
```sh
<script>
    var FeedScouts = {
        targetElement:'#instafeed',
        resizeIframe: function (obj) {
            obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
        }
    }
</script>
```


### Todo's

 - Connect the database and Admin panel

![alt tag](http://www.leojavier.com/assets/images/leojavier-logo-solid.png)
