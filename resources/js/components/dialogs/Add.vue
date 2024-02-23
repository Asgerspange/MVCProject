<template>
    <Dialog ref="dialog" :visible="visible" modal header="Add entry" :aria-expanded="visible ? true : false" style="max-width: 600px;">
        <template v-if="entry">
            <div class="row">
                <div class="col-6">
                    <InputText v-model="entry.name" placeholder="Name"></InputText>
                </div>
                <div class="col-6">
                    <InputText v-model="entry.age" placeholder="age"></InputText>
                </div>
                <div class="col-6">
                    <InputText v-model="entry.record" placeholder="record"></InputText>
                </div>
                <div class="col-6">
                    <InputText v-model="entry.style" placeholder="style"></InputText>
                </div>
            </div>
        </template>

        <template v-slot:footer>
            <Button @click="close()" severity="secondary" text label="Close"/>
            <Button @click="addEntry()" text label="Add"/>
        </template>
    </Dialog>
</template>

<script>
    export default {
        data() {
            return {
                entry: {
                    name: '',
                    age: '',
                    record: '',
                    style: ''
                }
            }
        },

        props: {
            visible: {
                type: Boolean,
                default: false
            }
        },

        methods: {
            close() {
                this.entry = {
                    name: '',
                    age: '',
                    record: '',
                    style: ''
                };
                this.$emit('closed');
            },

            addEntry() {
                return axios.post('api/members/addMember', this.entry)
                    .then(() => {
                        this.close();
                        this.$emit('update');
                    });
            }
        }
    }
    
</script>

<style>
    .p-dialog-header-icon  {
        display: none;
    }

    .p-inputtext p-component p-filled {
        user-select: text;
    }
</style>