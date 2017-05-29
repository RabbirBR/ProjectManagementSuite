<template lang="html">
<div class="my-projects">
    <div class="list-group" style="margin-bottom: 0px">
        <project :key="project.id" v-for="project in projects" :project="project" v-on:projectrequest="requestProject"></project>
</div>
</div>
</template>

<script>
export default {
    props: ['projects'],

    methods:{
        requestProject(project){
            this.$emit("projectrequest", {
                id: project.id
            });
        }
    },

    mounted() {
    }
}
</script>
<style type="text/css">
.my-projects{
    overflow-x: hide;
}
</style>
