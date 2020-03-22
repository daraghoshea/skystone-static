<script>
    import {debounce} from 'lodash'

    export default {
        props: {
            breakPoint: {
                type: String,
                default: 'md'
            }
        },
        data() {
            return {
                open: false,
                sticky: false
            }
        },
        mounted() {
            window.addEventListener('scroll', () => {
                //debugger
                this.sticky = window.scrollY > this.$el.offsetHeight;
            });
        },
        render() {
            return this.$scopedSlots.default({
                isOpen: this.open,
                open: () => this.open = true,
                close: () => this.open = false,
                sticky: this.sticky,
                breakPoint: this.breakPoint
            })
        }
    }
</script>