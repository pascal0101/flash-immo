<template>
  <div>
    <div class="input-group">
      <input :type="show ? 'text' : 'password' " name placeholder="password" class="form-control" />
      <div class="input-group-addon" @click="show = ! show">
        <i class="glyphicon glyphicon-eye-close" v-show="! show"></i>
        <i class="glyphicon glyphicon-eye-open" v-show="show"></i>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("ok");
  },
  data() {
    return {
      show: false
    };
  }
};
</script>
