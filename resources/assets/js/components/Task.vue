<template lang="html">
    <div class="task">
        <div :class="{taskWithChild: isFolder}">
            {{ task.name }}
            <div class="pull-right">

                <!-- <span v-if="task.children">[{{open ? '-' : '+'}}]</span> -->
            </div>
        </div>
        <!-- <hr style="margin-bottom: 5px; margin-top: 2px; border-top: 1px solid black"> -->
        <div class="children" v-if="task.children">
            <task v-for="child in task.children" :task="child"></task>
        </div>
        <!-- <hr style="margin-bottom: 5px; margin-top: 2px; border-top: 1px solid black"> -->
    </div>
</template>

<script>
    export default {
        props: ['task'],
        mounted() {
            console.log('Task Component mounted.');
            console.log('With: ');
            console.log(this.task);
        },
        computed: {
            isFolder: function () {
                return this.task.children && this.task.children.length;
            }
        }
    }
</script>

<style type="text/css">
    .task{
        border: 1px solid;
        margin-top: 0px;
        padding-left: 5px;
        /*margin-right: 10px;*/
        cursor: pointer;
    }
    .taskWithChild {
        font-weight: bold;
    }
    .children{
        margin-left: 4rem;
    }
</style>