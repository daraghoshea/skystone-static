<script>
    import {debounce} from 'lodash';

    export default {
        props: {
            ratio: {
                type: Number,
                default: 1.777  // 16:9
            }
        },
        data() {
            return {
                height: 0,
                width: 0,
                style: {}
            }
        },
        mounted() {
            this.calculate();
            window.addEventListener('resize', this.onResize);
        },
        methods: {
            calculate() {
                const w = this.$el.offsetWidth,
                      h = this.$el.offsetHeight;

                if( w/h <= this.ratio ) {
                    this.height = h;
                    this.width = Math.ceil(h * this.ratio);
                    this.style = {
                        height: "100%",
                        width: `${this.width}px`,
                        maxWidth: 'none'
                    }
                } else {
                    this.height = Math.ceil(w / this.ratio);
                    this.width = w;
                    this.style = {
                        width: "100%",
                        height: `${this.height}px`,
                        maxHeight: 'none'
                    }
                }
            },
            onResize: debounce(function(){
                this.calculate()
            },300),
            scroll() {
                window.scrollTo({
                    top: this.$el.scrollTop + this.$el.offsetHeight,
                    behavior: 'smooth'
                })
            }
        },
        render() {
            return this.$scopedSlots.default({
                height: this.height,
                width: this.width,
                style: this.style,
                scroll: this.scroll
            })
        }
    }
</script>