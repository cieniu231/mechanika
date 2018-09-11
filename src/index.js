import React from 'react';
import ReactDOM from 'react-dom';
import Input from '@material-ui/core/Input';
import Radio from '@material-ui/core/Radio';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import FormControl from '@material-ui/core/FormControl';
import RadioGroup from '@material-ui/core/RadioGroup';
import InputLabel from '@material-ui/core/InputLabel';
import MenuItem from '@material-ui/core/MenuItem';
import Select from '@material-ui/core/Select';
import TextField from '@material-ui/core/TextField';


const ITEM_HEIGHT = 48;
const ITEM_PADDING_TOP = 8;
const MenuProps = {
  PaperProps: {
    style: {
      maxHeight: ITEM_HEIGHT * 4.5 + ITEM_PADDING_TOP,
      width: 250,
    },
  },
};

const names = [
  'Wymiana oleju i filtra oleju',
  'Wymiana klocków hamulcowych',
  'Przegląd podstawowy',
  'Wymiana filtra powietrza',
  'Przegląd klimatyzacji',
  'Diagnostyka komputerowa',
  'Wymiana rozrządu',

];


class MultipleSelect extends React.Component {
  state = {
    name: [],
  };

  handleChange = event => {
    this.setState({ name: event.target.value });
  };

  render() {
    return (
      <div className="root">
        <FormControl className="formControl">
          <InputLabel htmlFor="select-multiple">Wybierz usługę</InputLabel>
          <Select
            multiple
            value={this.state.name}
            onChange={this.handleChange}
            input={<Input id="select-multiple" />}
            MenuProps={MenuProps}
          >
            {names.map(name => (
              <MenuItem
                key={name}
                value={name}
              >
                {name}
              </MenuItem>
            ))}
          </Select>
        </FormControl>
      </div>
    );
  }
}

class TextfieldToProblem extends React.Component {
  render() {
    return(
      <TextField
        id="textarea"
        label="Opisz swój problem z samochodem"
        placeholder=""
        multiline
        className="textField"
        margin="normal"
      />
    );
  }
}

class RadioSelect extends React.Component {
  render() {
    return(

    );
  }
}

class AppointmentForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {liked: false};
  }

  handleChange = event => {
    this.setState({ value: event.target.value });
  };

  render() {


    document.getElementById('app-btn').onClick = function() {
      this.setState({liked: true})
    };


    if (this.state.liked) {
      return (<div className="formula">
          <form className="container" noValidate autoComplete="off">
            <h3 className="h3-form">Umów wizytę w warsztacie</h3>
            <br></br>
            <h6 className="h6-form">Wypełniony formularz zostanie przekazany do warsztatu, skontaktujemy się z Tobą aby
              potwierdzić wizytę </h6>
            <FormControl   className="formControl">
              <RadioGroup
                aria-label="Gender"
                name="gender1"
                className="group"
                value={this.state.value}
                onChange={this.handleChange}
              >
                <FormControlLabel value="wybór" control={<Radio />} label="Wybieram usługę" />
                <FormControlLabel value="opis" control={<Radio />} label="Potrzebuję diagnozy problemu" />

              </RadioGroup>

              <MultipleSelect/>
              <TextfieldToProblem/>
            </FormControl>

            <br/>
            <br/>
            <TextField
              required
              id="name"
              label="Imię"
              placeholder=""
              className="input"
              inputProps={{
                'aria-label': 'Description',
              }}
            />
            <br/>
            <TextField
              required
              id="surname"
              label="Nazwisko"
              placeholder=""
              className="input"
              inputProps={{
                'aria-label': 'Description',
              }}
            />
            <br/>



          </form>
        </div>
      )
    }


    return (



      <button onClick={() => this.setState({liked: true})}>
        ELLOjssss
      </button>
    );
  }
}



let domContainer = document.querySelector('#form');
ReactDOM.render(<AppointmentForm/>, domContainer);



