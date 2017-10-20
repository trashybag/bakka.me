<html lang=en>

<head>
  <meta charset=utf-8>
  <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Upload and share files anonymously for free."/>
  <meta property=og:type content=website />
  <meta property=og:url content="https://bakka.me" />
  <meta property=og:title content="bakka.me - File Hosting" />
  <meta property=og:site_name content=bakka.me />
  <meta property=og:locale content=en-US />
   <title>Bakka | HOME</title>
  <link rel="shortcut icon" href=favicon.ico type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.common.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.min.js"></script>
</head>
<style>
.swal-modal {
  background-color:#171717 !important;
}
</style>
<body><div class="layer">
  <div class=container>
    <div class=jumbotron>
        <center><a href=""><img style="width:100%;height:auto;" src="https://bakka.me/img/bakkame.png"></a></center>
        <p class=lead>The limit is 100Mb</p><noscript><p class="alert alert-error"><strong>Enable JavaScript</strong> Here is a non javascript version of the website: <a href="https://pomfe.co/nojs.html">https://pomfe.co/nojs.html</a></p></noscript>
        <p id=no-file-api class="alert alert-error"><strong>This site requires some cool Web 2.0 stuff</strong> Install the latest<a href="https://firefox.com/">Firefox</a> or <a href="https://chrome.google.com/">Botnet</a> and come back &lt;3</p><a href="javascript:;" id=upload-btn class="btn">Select <span>or drop</span> file(s)</a>
        <input type=file id=upload-input name="files[]" multiple data-max-size=100MiB>
        <ul id=upload-filelist></ul>


        <div class="footer">
            <?php include('global/footer.html'); ?>
        </div>
<!-- <script>
function uploadCompleted() {
swal({
  title: 'Success!',
  text: 'Your file(s) has been uploaded!',
  imageUrl: 'https://a.bakka.me/coyiqdk.jpg',
  imageWidth: 400,
  imageHeight: 300,
  imageAlt: 'Custom image',
  animation: false
})
}
</script> -->
        <script async src=pomf.min.js></script>
</div>
</body>

</html>
