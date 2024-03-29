<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>tinymce.init({
        selector: 'textarea',
        height: 500,
        plugins: [
              "advlist autolink lists link image charmap print preview anchor",
              "searchreplace visualblocks code fullscreen",
              "insertdatetime media table contextmenu paste imagetools wordcount"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        // imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
        content_css: [
          '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
          '//www.tinymce.com/css/codepen.min.css'
        ]
      });</script>
</head>
<body>
    <textarea>
        <p style="text-align: center; font-size: 15px;"><img title="TinyMCE Logo" src="//www.tinymce.com/images/glyph-tinymce@2x.png" alt="TinyMCE Logo" width="110" height="97" />
        </p>
        <h2 style="text-align: center;">Welcome to the TinyMCE editor demo!</h2>
        <h1><img style="float: right; padding: 0 0 10px 10px;" title="Tiny Husky" src="//www.tinymce.com/docs/images/tiny-husky.jpg" alt="Tiny Husky" height="320" width="304" /></h1>
        <h2>Image Tools Plugin feature<br>Click on the image to get started</h2>
        <p>Please try out the features provided in this image tools example.</p>
        <p>Note that any <b>MoxieManager</b> file and image management functionality in this example is part of our commercial offering – the demo is to show the integration.</h2>
        <h2>Got questions or need help?</h2>
        
        <ul>
          <li>Our <a href="https://www.tinymce.com/docs/">documentation</a> is a great resource for learning how to configure TinyMCE.</li>
          <li>Have a specific question? Visit the <a href="https://community.tinymce.com/forum/">Community Forum</a>.</li>
          <li>We also offer enterprise grade support as part of <a href="www.tinymce.com/pricing">TinyMCE Enterprise</a>.</li>
        </ul>
        <h2>A simple table to play with</h2>
        <table>
          <thead>
            <tr>
              <th>Product</th>
              <th>Cost</th>
              <th>Really?</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>TinyMCE</td>
              <td>Free</td>
              <td>YES!</td>
            </tr>
            <tr>
              <td>Plupload</td>
              <td>Free</td>
              <td>YES!</td>
            </tr>
          </tbody>
        </table>
      
        <h2>Found a bug?</h2>
        <p>If you think you have found a bug please create an issue on the <a href="https://github.com/tinymce/tinymce/issues">GitHub repo</a> to report it to the developers.</p>
      
        <h2>Finally ...</h2>
        <p>Don't forget to check out our other product <a href="http://www.plupload.com" target="_blank">Plupload</a>, your ultimate upload solution featuring HTML5 upload support.</p>
        <p>Thanks for supporting TinyMCE! We hope it helps you and your users create great content.<br>All the best from the TinyMCE team.</p>
      </textarea>
     
</body>
</html>