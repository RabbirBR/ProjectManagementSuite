<template lang="html">
  <div class="project">
    <a v-bind:id="project.id" @click="loadProject" class="projectListItem list-group-item">
      {{ project.name }}
    </a>
  </div>
</template>

<script>
  export default {
    props: ['project'],
    methods:{
      loadProject(e){
        e.preventDefault();
        var id = e.target.id;
        this.$emit("projectrequest", {
          id: id
        });
      }
    },
    mounted() {
      /*console.log('Project Component mounted.');*/
    }
  }
</script>
<style type="text/css">
  .project{
    font-size: 13px;
    cursor: pointer;
  }
</style>
