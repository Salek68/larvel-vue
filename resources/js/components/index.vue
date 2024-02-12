<template>


    <center>


        <form action="/test" method="get">
    <input name="name" value="">
    <input name="name1" value="saleh,username,10,12" hidden>
    <button  type="submit"> {{$title}}</button>


    </form>

    <button @click="showAlert" onclick="showAlert()">Hello world</button>
    </center>






</template>

<script>
function showAlert() {
    alert('Hello Vue world!!!');
}
export default {
  methods: {
    showAlert() {
      // Use sweetalert2
      alert('Hello Vue world!!!');
    },
  },
};

</script>
