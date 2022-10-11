# Duplexmedia Frontend

Gulp 4 Framework based on webp, php, sass, js & Bootstrap.

### Install Node_Modules

```
npm install
```

### Install Framework

```
gulp install
```

### Start Server

```
gulp
```
This will watch sass, js and html/php files. (http://localhost:3000/)

### Generate Webfonts
```
1. Open ('src/css/fonts/fonts.list') file and add Font from Google
2. gulp fonts // Generates Fonts inside webfont folder and ('src/css/scss/layout/webfont.scss') file
3. Change font-family in ('src/css/scss/layout/variables.scss')
```

### Compress Images / Create Webp
```
gulp images // Compress jpg/png
gulp webp // Creating webp
```

### Generate Favicon
```
change Favicon Settings in gulpfile.js
add a Favicon to ('src/images/favicon.png')
gulp favicon
```

### Build Folder
```
gulp copy   // Create Build Directory and Copy all Elements
gulp build  // Minify PHP/CSS/JS
```

### Delete Build Folder
```
gulp clean
```

### Update Packages

```
1. ncu (check for updates)
2. ncu -u (update package.json)
3. npm install
```
This will install the newest Packages.



