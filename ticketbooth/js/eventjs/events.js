// var getApiData = function(){

// var keyword = document.getElementById("keyword1").value;
// //alert(keyword);
//  fetch('https://cors-anywhere.herokuapp.com/https://events.ticketbooth.com.au/rest.api/Event/search?partner=-1&follow%5B%5D=venue&methods%5B%5D=search_date_title&limit=30&keyword='+keyword+'&page=1')
//       .then(response => response.json())
//       .then(result => {
//         console.log(result);
//          const listItems = result.map((number , index) =>
          
//            <div className="col-md-12 col-lg-12 content-area mb-3" key={index} id="primary">
//               <div className="row event-listings">
//                 <div className="col-12 mb-12" id="primary">
//                   <div className="card">
//                     <div className="row">
//                       <div className="col-md-2 card-body p-0 hi-300">
//                         <img className="wi-100" src={number.image_url !== null ? number.image_url : 'http://103.97.184.75/wp-content/themes/understrap/image/placeholder.jpg'  }/>
//                       </div>
//                       <div className="col-md-7 card-header hi-auto">
//                         <h5 className="card-text" title={number.event}>{number.event}</h5>
//                         <h4 className="card-text">{number.venue.address}, {number.venue.city}</h4>
//                         <h6 className="card-text">{number.event_start}</h6>
//                       </div>

//                       <div className="col-md-3 card-footer cta">
//                         <a href={number.url}>Get Tickets</a>
//                       </div>
//                     </div>
//                   </div>
//                 </div>
//               </div>
//             </div>
            

//           );
//         ReactDOM.render(
//           <div className='col-lg-12 event_list'><div className="row">{listItems}</div></div>,
//          document.getElementById('event_list')
//          );
//       })
//       .catch(e => console.log(e));
// }

class InfiniteData extends React.Component {
  constructor() {
    super();
    this.state = {
      data: [],
      pageNumber : 0,
      finalData :[]
    };
    this.getData = this.getData.bind(this)
  }

getInitial(){
  this.setState({
    data: [],
    pageNumber: 0,
    finalData: []
  });
}

componentWillUnmount () {
  window.removeEventListener('scroll', this.handleOnScroll  );
}
  // getInitialState: function () {
  //   return ({ data: [], requestSent: false });
  // },

  componentDidMount () {
    window.addEventListener('scroll', this.handleOnScroll);
    this.getData();
  }
  getData(){
   var keyword = document.getElementById("keyword1").value ;
   // alert(keyword);
    this.setState({
      pageNumber: this.state.pageNumber + 1
    });
    fetch('https://cors-anywhere.herokuapp.com/https://events.ticketbooth.com.au/rest.api/Event/search?partner=-1&follow%5B%5D=venue&methods%5B%5D=search_date_title&limit=30&keyword=' + keyword + '&page=' + this.state.pageNumber.toString())
      .then(response => response.json())
      .then(result => {
        if (result.length !== 0){
          this.setState({ finalData: this.state.finalData.concat(result)});
          const displayData = this.state.finalData.map((number, index) =>
            <div className="col-md-12 col-lg-12 content-area mb-3" key={index} id="primary">
              <div className="row event-listings">
                <div className="col-12 mb-12" id="primary">
                  <div className="card">
                    <div className="row">
                      <div className="col-md-2 card-body p-0 hi-300">
                        <img className="wi-100" src={number.image_url !== null ? number.image_url : 'http://103.97.184.75/wp-content/themes/understrap/image/placeholder.jpg'  }/>
                      </div>
                      <div className="col-md-7 card-header hi-auto">
                        <h5 className="card-text" title={number.event}>{number.event}</h5>
                        <h4 className="card-text">{number.venue.address}, {number.venue.city}</h4>
                        <h6 className="card-text">{number.event_start}</h6>
                      </div>

                      <div className="col-md-3 card-footer cta">
                        <a href={number.url}>Get Tickets</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          );
          this.setState({
            data: displayData
          });
        }

        // ReactDOM.render(
        //   <div className='col-lg-12 event_list'><div className="row">{listItems}</div><div className="clearfix"></div><a href="#!" className="load-more">Load More Result</a></div>,
        //  document.getElementById('event_list')
        //  );
        //  ReactDOM.render(
        //   <div className='col-lg-12 event_list'><div className="row">{listItems}</div></div>,
        //  document.getElementById('event_list_widget')
        //  );
      })
      .catch(e => console.log(e));
  }
  
  handleOnScroll = () => {
    var scrollTop = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
    var scrollHeight = (document.documentElement && document.documentElement.scrollHeight) || document.body.scrollHeight;
    var clientHeight = document.documentElement.clientHeight || window.innerHeight;
    var scrolledToBottom = Math.ceil(scrollTop + clientHeight) >= scrollHeight;

    if (scrolledToBottom) {
      this.getData()
    }
  }

  render() {
    return <div>
      <div className='col-lg-12 event_list'><div className="row">{this.state.data}</div></div>
    </div>;
  }
};

// ReactDOM.render(
//   <InfiniteData />,
//   document.getElementById("event_list")
// );

var searchComponent = ReactDOM.render(React.createElement(InfiniteData), document.getElementById('event_list'));
var search = function () {
  searchComponent.getInitial();
  searchComponent.getData();
}
  // ReactDOM.render(
  //   <InfiniteData />,
  //   <div className='col-lg-12 event_list'><div className="row">{this.state.data}</div></div>,
  //          document.getElementById('event_list_widget')
  //   );
