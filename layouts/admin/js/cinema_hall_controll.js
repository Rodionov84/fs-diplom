'use strict';

class CinemaHallControll extends React.Component {
    constructor(props) {
        super(props);

        this.state = {

        };

        console.warn(props);
    }

    render() {
        return e(
            'button',
            { onClick: () => this.setState({ liked: ! this.state.liked }) },
            ''like
        );
    }
}
