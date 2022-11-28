const mix = require("laravel-mix");

mix
  .js("resources/js/app.js", "js")
  .postCss("resources/css/app.css", "css", [
    require("tailwindcss"),
    require("autoprefixer"),
  ])


  .options({ processCssUrls: false })
  .webpackConfig({
    module: {
      rules: [
        {
          test: /\.js$/,
          enforce: "pre",
          use: ["source-map-loader"],
        },
      ],
    },
    devServer: {
      open: true,
    },
  })
//   .copyDirectory("resources/html/", "dist")
  .copyDirectory("resources/images", "public/images")
  .copyDirectory("resources/fonts", "public/fonts")
  .setPublicPath("public")
  .disableNotifications();
