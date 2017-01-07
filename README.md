Gravatar Twig Helper - Bolt Extension
===========================================

[Bolt](https://bolt.cm/) extension to add gravatar twig helper.
Use extern library from [Ryan Halliday](https://github.com/ry167): [twig-gravatar](https://github.com/ry167/twig-gravatar)


### Requirements
- Bolt 3.x installation

### Installation
1. Login to your Bolt installation
2. Go to "View/Install Extensions" (Hover over "Extras" menu item)
3. Type `gravatar` into the input field
4. Click on the extension name
5. Click on "Browse Versions"
6. Click on "Install This Version" on the latest stable version

### Usage
Use twig filters on an email `<img src="{{ record.user.email|grAvatar|grHttps|grSize(40) }}" alt="Author avatar"/>`.
All filters definition are available on original library [README](https://github.com/ry167/twig-gravatar#filters)

### Credits
Use extern library : [twig-gravatar](https://github.com/ry167/twig-gravatar)

### License
This Bolt extension is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
