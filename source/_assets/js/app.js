import {debounce} from "alpinejs/src/utils";

export default {

    fullCover(container) {

        container = container || document.body;

        const calculate = (containerWidth, containerHeight, mediaRatio = 1.777) => {
            if( containerWidth/containerHeight <= mediaRatio ) {
                let width = Math.ceil(containerHeight * mediaRatio);
                return {
                    height: containerHeight,
                    width,
                    style: `height: 100%; width: ${width}px; max-width: none;`
                };
            } else {
                let height = Math.ceil(containerWidth / mediaRatio);
                return {
                    width: containerWidth,
                    height,
                    style: `width: 100%; height: ${height}px; max-height: none;`
                };
            }
        };

        const {height, width, style} = calculate(container.offsetWidth, container.offsetHeight);

        return {
            height,
            width,
            style,
            called: 0,
            onResize: debounce((container, mediaRatio = 1.777) => {
                const {height, width, style} = calculate(container.offsetWidth, container.offsetHeight, mediaRatio);
                this.called++;
                this.height = height;
                this.width = width;
                this.style = style;
                console.log('calculate', width, height, 'style', style)
            },300)
        }
    }
}