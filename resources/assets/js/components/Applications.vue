<template>
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 lg:w-1/3 pr-4 flex" v-for="application in applications">
            <wow-armoury :application="application"></wow-armoury>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            applications: {
                type: Array,
                required: true,
            },
        },
        data() {
            return {
                character: null,
            }
        },
        mounted() {
            let self = this
        },
    }
</script>
