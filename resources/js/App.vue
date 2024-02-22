<template>
    <div class="card">
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
                        <button @click="deleteMember(member.id)">Delete</button>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                data: null
            }
        },

        mounted() {
            this.getFighter();
        },
        methods:{
            deleteMember(id){
                return axios.post('/api/delete', {id:id})
                .then(response => { this.getFighter()
                });
            },
            getFighter(){
                return axios.get('/api/getList')
                .then(response => {
                    this.data = response.data.members;
                });
            }
            
        }
    }
</script>

<style lang="scss" scoped>
    th {
        color: red;
    }
</style>