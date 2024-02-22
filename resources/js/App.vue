<template>
    <div class="card">
        <div class="card-header">Members</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="col-lg-3">Name</th>
                        <th class="col-lg-3">Age</th>
                        <th class="col-lg-3">Record</th>
                        <th class="col-lg-3">Style</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="member in data" :key="member.id">
                        <td>{{ member.name }}</td>
                        <td>{{ member.age }}</td>
                        <td>{{ member.record }}</td>
                        <td>{{ member.style }}</td>
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
             axios.get('/api/getList')
                .then(response => {
                    this.data = response.data.members;
                });
        }
    }
</script>