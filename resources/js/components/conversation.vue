<template>
 <div class="col-9">
        <div class="offers_messages_inbox pt-20" v-if="users">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="inbox_chat">
                        <div class="post_title">
                            <h5 class="title">User</h5>
                        </div>
                        <div class="inbox_chat_wrapper">
                            <div v-for="(user, index) in users" :key='index' class="single_chat chat_online d-flex align-items-center">
                                <div class="chat_author">
                                    <a v-if="user.photo" href="" @click.prevent="getMessage(user.id)">
                                        <img :src="'/storage/users/'+ user.photo" alt="author">
                                    </a>
                                    <a v-else href="" @click.prevent="getMessage(user.id)">
                                        <img :src="'/storage/users/default.png'" alt="author">
                                    </a>
                                </div>
                                <div class="chat_content media-body">
                                    <a href="" @click.prevent="getMessage(user.id)">
                                        <h6 class="name">{{user.username}}</h6>
                                        <span style="color:#28a745 !important" v-if="user.is_online==1" 
                                                class="sub_title">
                                                Online
                                            
                                        </span>
                                        <span v-else 
                                                class="sub_title">
                                                Offline
                                            
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="inbox_massage">
                        <div class="post_title">
                            <h5 class="title">Chat Messages</h5>
                        </div>
                        <!-- receiving message box here -->
                        <div class="inbox_massage_wrapper messages" v-chat-scroll="{always: false, smooth: true, scrollonremoved:true}">
                            <div v-for="(message, index) in messages" :key="index">
                                <div class="incoming_msg d-flex" v-if="message.sentByMe" >
                                    <div class="incoming_msg_img" v-if="message.user.photo">
                                        <img :src="'/storage/users/'+ message.user.photo" alt="author">
                                    </div>
                                    <div class="incoming_msg_img" v-else>
                                        <img :src="'/storage/users/default.png'" alt="author">
                                    </div>
                                    <div class="incoming_msg_content media-body">
                                        <p class="pb-0">{{message.user.username}}</p>
                                        <p v-if="message.ad" >
                                            <a type="button" @click="showAd(message.ad.slug)">
                                                {{message.ad.slug}}
                                                <img :src="'/storage/advertisement/'+message.ad.image.photo0" alt="">
                            
                                            </a>
                                        </p>
                                        <p class="pt-0">{{message.message}} </p>
                                        <span class="pt-0">{{moment(message.created_at).startOf('hour').fromNow()}}</span>
                                    </div>
                                </div>
                            <div class="outgoing_msg clearfix" v-else>
                                <div class="outgoing_msg_content">
                                    <p class="pb-0">{{message.user.username}}</p>
                                    <p class="pt-0">{{message.message}} </p>
                                    <span class="pt-0">{{moment(message.created_at).startOf('hour').fromNow()}}</span>
                                </div>
                            </div>
                            </div>

                        </div>
                        <!-- message type box here -->
                        <div class="massage_type" v-if="showMessageInputBox">
                            <textarea placeholder="Type Here & Press Enter"
                            v-model="message">

                            </textarea>
                            <button @click.prevent="sendMessage()">
                                <i class="fal fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offers_messages_inbox pt-50" v-else>
             <div class="post_title">
                <h5 class="title text-center">No Messages</h5>
            </div>
        </div>

    </div>
    
</template>
<script>
import sendMessageVue from './sendMessage.vue';
import moment from 'moment';
export default {

    async created(){
          this.getUsers()
    },
   async mounted(){
              setInterval(()=>{
                this.getUsers()
                this.getMessage(this.selectedUserId)
        },1000)
        this.getUserActivity()
        
        
    },
    data(){
        return{
            language:'',
            users:[],
            messages:[],
            selectedUserId:'',
            urlPrefix:'',
            message:'',
            moment:moment,
            showMessageInputBox:false
            
        }
    },
    methods:{
        async getUsers(){
            const res = await this.callApi('get','messages/user');
            this.users = res.data
               
        },
        async getMessage(userId){
            const res =  await this.callApi('get','message/user/'+userId);
            if(res.status == 200){
                this.messages = res.data
                this.selectedUserId = userId
                this.showMessageInputBox=true
            }

        },
        async getLocale()
        {
            const res = await this.callApi('get','locale');
            return res.data
        },
        async showAd(slug){
            const lang = await this.getLocale()
            const res = await this.callApi('post','get-ad',{lang:lang, slug:slug});
            window.open(res.data, '_blank')
        },
        async sendMessage()
        {
            const res =  await this.callApi('post','start-conversation',{receiverId:this.selectedUserId, message:this.message});
            this.messages.push(res.data) 
            this.message=''
        },

    
    }
}
</script>