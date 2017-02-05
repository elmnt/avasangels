# wp-git-starter  

This is a starting point for my WordPress + Git workflow. It makes use of the very handy [WP-Cli](http://wp-cli.org) command-line tools to manage your WordPress install.

100% of the credit for this setup goes to [Marc Jenkins](https://marcjenkins.co.uk/a-wordpress-git-workflow/). Definitely read his article, for detailed info, but this is basically all you need to do, to get up & running:

#### Setup  

**Clone the repo**

```
git clone [this repo] my-site/
```

```
cd my-site/
```

**Install the dependencies**

```
npm install
```

**Install the latest version of WordPress**

```
wp core download 
```

Lastly, update the gulpfile based on your theme setup (the themePath variable, your Sass/CSS workflow, for example, etc., etc.). The gulpfile is pretty basic, so easily customizable, depending on how you're building your styles.  

Normally, from this point, I'll drop a (renamed) copy of [_s](https://underscores.me) into my themes directory, add my custom Sass framework, and start there. You can obviously go down any path that suits you.

**Reference**  
WP-CLI  
A command line interface for WordPress  
http://wp-cli.org  
