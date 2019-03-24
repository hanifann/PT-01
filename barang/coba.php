<html>
<head>
<title>
</title>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script type="text/javascript">
new Vue({
el: '#app',
data: {
  num: 0
}
})
</script>
<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css" />

<!-- Add this after vue.js -->
<script src="https://unpkg.com/vue"></script>
<script src="//unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"></script>
<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>

</head>
<body>
  <div id="app">
    <b-input-group>
      <b-input-group-prepend>
        <b-btn variant="outline-info" @click="num--">-</b-btn>
      </b-input-group-prepend>

      <b-form-input type="number" min="0.00" v-model="num"></b-form-input>

      <b-input-group-append>
        <b-btn variant="outline-secondary" @click="num++">+</b-btn>
      </b-input-group-append>
    </b-input-group>
  </div>
</body>
</html>
