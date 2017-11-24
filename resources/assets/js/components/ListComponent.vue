<template>
    <div class="row">
        <div class="col-md-6 col-lg-push-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Current Tasks</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li v-for="item,index in tasks" class="list-group-item" style="clear: both;">
                            {{ item.text }} {{ item.done }}
                            <a href="#" class="btn btn-success" v-on:click.stop.prevent="doneTask(index)">Done</a>
                            <a href="#" class="btn btn-danger" v-on:click.stop.prevent="deleteTask(index)">Delete</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');

        },
        data() {
            return {
                tasks: [
                    {
                        id: 1,
                        text: 'sdadasd',
                        done: 0,
                        created_at: '2017-11-24 10:21:15',
                        updated_at: '2017-11-24 10:21:15'
                    },
                    {
                        id: 1,
                        text: 'sdadasd',
                        done: 0,
                        created_at: '2017-11-24 10:21:15',
                        updated_at: '2017-11-24 10:21:15'
                    },
                    {
                        id: 1,
                        text: 'sdadasd',
                        done: 0,
                        created_at: '2017-11-24 10:21:15',
                        updated_at: '2017-11-24 10:21:15'
                    },
                    {
                        id: 1,
                        text: 'sdadasd',
                        done: 0,
                        created_at: '2017-11-24 10:21:15',
                        updated_at: '2017-11-24 10:21:15'
                    }
                ]
            }
        },
        methods: {
            deleteTask: function (index) {
                this.tasks.splice(index,1);

                console.log(this.tasks[index].id);
            },
            doneTask: function (index) {
                let current = this.tasks[index];

                current.done = 1;
            }
        }
    }
</script>
