<template>
    
</template>

<script>
    export default {
        data() {
            return {
                fighter: {
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
        }
    }
</script>