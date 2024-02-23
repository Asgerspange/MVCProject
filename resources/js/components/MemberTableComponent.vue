<template>
    <div class="container">
        <div class="card col-lg-10">
            <div class="card-header">Members</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-lg-2">Name</th>
                            <th class="col-lg-2">Age</th>
                            <th class="col-lg-2">Record</th>
                            <th class="col-lg-2">Style</th>
                            <th class="col-lg-2">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="member in data">
                            <td>{{ member.name }}</td>
                            <td>{{ member.age }}</td>
                            <td>{{ member.record }}</td>
                            <td>{{ member.style }}</td>
                            <td>
                                <Button @click="toggleDialog('edit', member)" label="Edit" severity="info"/>
                                <Button @click="toggleDialog('delete', member)" label="Delete" severity="danger"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <Delete :visible="showDeleteDialog" :entry="tempEntry" @close="showDeleteDialog = false"/>
</template>

<script>
    import axios from 'axios';
    import Delete from './dialogs/Delete.vue';
    import Edit from './dialogs/Edit.vue';
    export default {
        data() {
            return {
                data: null,
                showEditDialog: false,
                showDeleteDialog: false,
                tempEntry: null,
            }
        },

        components: {
            Delete
        },

        mounted() {
            this.getFighter();
        },
        methods:{
            toggleDialog(action, entry){
                if (action === 'edit') {
                    this.tempEntry = Object.assign({}, entry);
                    this.showEditDialog = true;
                }

                if (action === 'delete') {
                    this.tempEntry = Object.assign({}, entry);
                    this.showDeleteDialog = true;
                }
            },

            getFighter(){
                return axios.get('/api/members/getMembers')
                .then(response => {
                    this.data = response.data.members;
                });
            }
            
        }
    }
</script>

<style lang="scss" scoped>
</style>