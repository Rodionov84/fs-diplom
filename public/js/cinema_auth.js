'use strict';

class CinemaAuth extends React.Component {


    render() {

        return (
            <div className="conf-step__wrapper">
                <label className="conf-step__label">
                        Логин:
                        <input
                            type="text"
                            className="conf-step__input"
                            // placeholder={cinema_hall.length}
                            // value={this.state.length}
                            // onChange={event=>{ this.setState({length: event.target.value}); }}
                            style={{width: 220}}
                        />
                    </label>
                    <br/>
                    <label className="conf-step__label" style={{marginTop: 5}}>
                        Пароль:
                        <input
                            type="password"
                            className="conf-step__input"
                            // placeholder={cinema_hall.width}
                            // value={this.state.width}
                            // onChange={event=>{ this.setState({width: event.target.value}); }}
                            style={{width: 220}}
                        />
                        <input
                            type="submit"
                            value="Авторизоваться"
                            className="conf-step__button conf-step__button-accent"
                            onClick={()=>{ this.createCinemaHall( this.state.newCinemaHallTitle ) }} />
                    </label>
                </div>
        );
    }
}
