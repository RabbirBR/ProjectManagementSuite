<template lang="html">
    <div class="task-list">
        <task v-for="task in tasks" :task="task"></task>
    </div>
</template>

<script>
    export default {
        props: ['tasks'],

        mounted() {
            console.log('Task List Component mounted.');
        }
    }
</script>
