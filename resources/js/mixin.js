export default{
    methods:{
        async callApi(method, url, data){
            try {
                return await axios({
                    method: method,
                    url: url,
                    data:data
                  });
                
            } catch (error) {
                return error.response
            }
        },
    }
};