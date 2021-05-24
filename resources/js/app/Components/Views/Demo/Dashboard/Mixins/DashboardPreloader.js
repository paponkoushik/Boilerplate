export const DashboardPreloader = {
    data(){
        return{
            countCreatedResponse: 0
        }
    },
    mounted(){
        this.loaderHeight();
    },
    methods: {
        loaderHeight() {
            let windowHeight = window.innerHeight;
            $(".Dashboard-preloader").css({
                "height": (windowHeight - 100) + "px"
            });
        },
    }
}