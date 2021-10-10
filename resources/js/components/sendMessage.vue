<template>
  <div>
    <button class="main-btn" 
            data-toggle="modal" 
            data-target="#sendMessage">
            <i class="fal fa-paper-plane">
            </i>
            Send to Seller
    </button>

    <!-- Modal -->
    <div
      class="modal fade"
      id="sendMessage"
      tabindex="-1"
      role="dialog"
      aria-labelledby="sendMessageLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="sendMessageLabel">Send Message To {{sellerName}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <textarea cols="30" rows="10"
              placeholder="Type something..."
              v-model="message">
            </textarea>
          </div>
          <div class="modal-footer">
            <button type="button" 
                    class="btn btn-danger"
                    data-dismiss="modal">
                    Cancel
            </button>
            <button @click.prevent="sendMessage()"
                    type="button"
                    :disabled="isDisabled"
                    :keyup="btnStatus()"
                    class="btn btn-primary">
                    <i class="fal fa-paper-plane"></i>
                    Send Now
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["sellerName","senderId","receiverId","adId"],
  data(){
    return{
      message:'',
      isDisabled:true,
      
    }
  },
  methods:{
   async sendMessage(){
     
     const res = await this.callApi('post','/fr/message',{sellerName:this.sellerName, sender_id:this.senderId, receiver_id:this.receiverId, ad_id:this.adId, message:this.message});
     if(res.status == 200){
        console.log(res.data);
       this.message=''
       $('#sendMessage').modal('hide')

     }
    },
    btnStatus(){
      if(this.message != ''){
        this.isDisabled=false
      }else{
        this.isDisabled=true
      }
    }
  },
};
</script>