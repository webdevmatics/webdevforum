<template>
    <div class="wrap">
        <a :href="threadUrl">
            {{ unread.data.user.name }} commented on {{ unread.data.thread.subject }}
        </a>
    </div>
</template>

<script>
    export default {
        props:['unread'],
        data(){
            return {
                threadUrl:""
            }
        },
        mounted(){
            this.threadUrl="thread/"+ this.unread.data.thread.id
        }

    }
</script>
