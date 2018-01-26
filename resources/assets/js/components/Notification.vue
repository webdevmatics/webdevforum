<template>
    <li class="dropdown" @click="markNotificationAsRead">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="glyphicon glyphicon-globe"></span> Notifications <span
                class="badge alert-danger">{{unreadNotifications.length}}</span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li>
                <notification-item v-for="unread in unreadNotifications" :unread="unread" :key="unread.id"></notification-item>
            </li>
        </ul>
    </li>
</template>

<script>
    import NotificationItem from './NotificationItem.vue';
    export default {
        props: ['unreads', 'userid'],
        components: {NotificationItem},
        data(){
            return {
                unreadNotifications: this.unreads
            }
        },
        methods: {
            markNotificationAsRead() {
                if (this.unreadNotifications.length) {
                    axios.get('/markAsRead');
                }
            }
        },
        mounted() {
            console.log('Component mounted.');
            Echo.private('App.User.' + this.userid)
                .notification((notification) => {
                    console.log(notification);
                    let newUnreadNotifications = {data: {thread: notification.thread, user: notification.user}};
                    this.unreadNotifications.push(newUnreadNotifications);
                });

        }
    }
</script>
