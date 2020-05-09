import React from 'react';

class CalltoVaporaki extends React.Component {
    constructor(props) {
      super(props);
      this.state = {
        error: null,
        isLoaded: false,
        items: []
      };
    }
  
    componentDidMount() {
      fetch("https://www.radiovaporaki.com/wp-json/wp/v2/posts/?_embed&per_page=10")
        .then(res => res.json())
        .then(
          (result) => {
            this.setState({
              isLoaded: true,
              items: result
            });
          },
          // Note: it's important to handle errors here
          // instead of a catch() block so that we don't swallow
          // exceptions from actual bugs in components.
          (error) => {
            this.setState({
              isLoaded: true,
              error
            });
          }
        )
    }
  
    render() {
      const { error, isLoaded, items } = this.state;
      if (error) {
        return <div>Error: {error.message}</div>;
      } else if (!isLoaded) {
        return <div>Loading...</div>;
      } else {
        return (
          <ul className="news-bulletin">
            {items.map(item => (
              <li key={item.id}>
                <img src={item._embedded['wp:featuredmedia'][0].media_details.sizes.thumbnail.source_url} />
                <a target="_blank" href={item.link}>{item.title.rendered}</a>
              </li>
            ))}
          </ul>
        );
      }
    }
  }

export default CalltoVaporaki;