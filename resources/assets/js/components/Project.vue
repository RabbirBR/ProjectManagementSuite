<template lang="html">
    <div class="project">
        <a v-bind:id="project.id" @click="loadProject" class="projectListItem list-group-item">
            <span>{{ project.name }}</span>
            <div class="pull-right" style="margin-right: 1rem;">
                
            </div>
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

// console.log('From Project Component = '+ id);

this.$emit("projectrequest", {
    id: id
});
}
},
mounted() {
    console.log('Project Component mounted.');
}
}
</script>
