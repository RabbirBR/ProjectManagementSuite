<template lang="html">
    <div class="my-projects">
        <div class="list-group" style="margin-bottom: 0px">
            <project v-for="project in projects" :project="project" v-on:projectrequest="requestProject"></project>
<!-- 
            <a href="#" class="projectListItem list-group-item">
                My Project - 1
            </a>
            <a href="#" class="projectListItem list-group-item">
                My Project - 2
            </a>
        -->
    </div>
</div>
</template>

<script>
    export default {
        props: ['projects'],

        methods:{
            requestProject(project){
                // console.log('From My Projects = '+ project.id);

                this.$emit("projectrequest", {
                    id: project.id
                });
            }
        },

        mounted() {
            console.log('My Projects Component mounted.');
            // console.log('With: ');
            // console.log(this.projects);
        }
    }
</script>
