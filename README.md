# FreeREGMockups

Frontend code and example markup for the new FreeREG.




## Installation

You'll need [sass](http://sass-lang.com/) (>= 3.4), [npm](https://www.npmjs.org/), [Bower](http://bower.io/) and [Grunt](http://gruntjs.com/) installed before you go any further.

To install the required packages run the following commands in the root of the project:

    npm install
    bower install

Then you can run Grunt (again in the root) like so:

    grunt

Grunt can be run to watch for any changed files and re-compile as you go using the watch task:

    grunt watch




## Markup

Example markup of all the currently designed UI components can be found in index.html.

Should this file serve as a template for any future code then the inline style block just inside the opening `<body>` tag should be removed as this is only there for the purposes of viewing all the elements clearly on one page.




## Styles

The css is written in scss format with the source files being located in /styles/scss. The structure is inherited directly from [Inuit.css](https://github.com/csswizardry/inuit.css/) which is a required dependecy installed by Bower.

All variables are declared or overridden from Inuit in /styles/scss/\_vars.scss. The code is commented throughout and most files that directly override an object or abstraction in Inuit will be named the same unless it warrants a whole new object/abstraction.

The compiled css can be found in /styles/css and is provided by Grunt in expanded and minified formats with sourcemaps.


### Responsive

We use a mobile first approach to enable small devices to only download the css they actually need and then add an extra stylesheet in for larger devices. The terminology we use to decide these breakpoints are as follows:

- palm (<= 570px)
- lap (571px to 1023px)
- desk (1024px to 1199px)
- desk-wide (>= 1200px)

These translate directly to media queries options that we can use via a mixin like so:

    @include media-query(palm) {
      ...
    }

There are also two extra combinations that we use to achieve extra coverage:

- lap-and-up (>= 571px)
- portable (<= 1023px)

Finally this all enables us to compile two primary stylesheets:

- /styles/scss/palm.scss - loaded for every device
- /styles/scss/lap_and_up.scss - loaded only on screens wider than 570px or if the browser is an IE earlier than version 9


### Internet Explorer

Any IE specific styles should go in ie.scss which will be loaded for all IEs <= v9. The classes `.ie6`, `.ie7`, `.ie8` and `.ie9` are provided to let you target a specific version.


### The Grid

The grid system is a slightly tweaked version of the Inuit grid. You can read more about the approach on Harrys website [here](http://csswizardry.com/2013/02/responsive-grid-systems-a-solution/) but the lowdown is this. Use `.grid` object to put things into a grid with gutters and then use the width classes like `.one-third` found in /bower_components/inuit.css/generic/\_widths.scss to control the sizes. All of the width classes are responive and use the same namespaces as described above.

Here is an example of a typical two column layout that stacks vertically on mobile:

    <div class="grid">

      <div class="grid__item  two-thirds  palm-one-whole">
        ...
      </div>

      <div class="grid__item  one-third  palm-one-whole">
        ...
      </div>

    </div>




## Images

All images are located in /images and predominantly we use svgs to create the icons, logos and graphics used in the design. To process these svgs into something usable that works across as many browsers as possible we first minify them and then run them through [Grunticon](https://github.com/filamentgroup/grunticon).

This is all done by Grunt so essentially all you need to do is drop any new or modified svg files in /images/svg/src and Grunt will do the rest. A preview file containing references to all the created icons and their associated classes lives at /styles/css/preview.html.

To modify the size of an icon in your css there is a mixin provided:

    .icon__star {

      /**
       * @param string width
       * @param string height (optional, defaults to the same as width)
       */

      @include sizeSvgIcon(20px, 40px);

    }

The suggested markup for an icon is as follows:

    <i class="icon__star" aria-hidden="true"></i>
