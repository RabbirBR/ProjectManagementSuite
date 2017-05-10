<template lang="html">
    <div class="other-projects">
        <div class="list-group" style="margin-bottom: 0px">
            <a href="#" class="projectListItem list-group-item">
                Other Project - 1
            </a>
            <a href="#" class="projectListItem list-group-item">
                Other Project - 2
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            props: ['projects'],
            console.log('Other Projects Component mounted.')
        }
    }
</script>
