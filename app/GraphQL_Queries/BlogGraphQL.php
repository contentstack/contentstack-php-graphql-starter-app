<?php
namespace App\GraphQL_Queries;
class BlogGraphQL{

	public static function getBlogPageQuery(){
        
        $gql = <<<QUERY
        query MyQuery {
          all_page(where: {title: "Blog"}) {
            items {
              page_components {
                ... on PagePageComponentsHeroBanner {
                  __typename
                  hero_banner {
                    banner_description
                    banner_title
                    bg_color
                    call_to_action {
                      href
                      title
                    }
                    banner_imageConnection {
                      edges {
                        node {
                          title
                          url
                          filename
                          description
                          content_type
                          file_size
                          dimension {
                            height
                            width
                          }
                          system {
                            content_type_uid
                            uid
                          }
                        }
                      }
                    }
                  }
                }
                ... on PagePageComponentsSectionWithBuckets {
                  __typename
                  section_with_buckets {
                    description
                    title_h2
                    buckets {
                      description
                      call_to_action {
                        href
                        title
                      }
                      title_h3
                      iconConnection {
                        edges {
                          node {
                            content_type
                            description
                            file_size
                            filename
                            title
                            url
                          }
                        }
                      }
                    }
                  }
                }
                ... on PagePageComponentsSection {
                  __typename
                  section {
                    description
                    title_h2
                    call_to_action {
                      href
                      title
                    }
                    imageConnection {
                      edges {
                        node {
                          content_type
                          description
                          file_size
                          filename
                          title
                          url
                          system {
                            content_type_uid
                            uid
                          }
                        }
                      }
                    }
                    image_alignment
                  }
                }
                ... on PagePageComponentsSectionWithHtmlCode {
                  __typename
                  section_with_html_code {
                    description
                    html_code
                    html_code_alignment
                    title
                  }
                }
                ... on PagePageComponentsSectionWithCards {
                  __typename
                  section_with_cards {
                    cards {
                      description
                      title_h3
                      call_to_action {
                        href
                        title
                      }
                    }
                  }
                }
                ... on PagePageComponentsFromBlog {
                  __typename
                  from_blog {
                    title_h2
                    view_articles {
                      href
                      title
                    }
                    featured_blogsConnection {
                      edges {
                        node {
                          ... on BlogPost {
                            title
                            url
                            body
                            date
                            is_archived
                            featured_imageConnection {
                              edges {
                                node {
                                  content_type
                                  description
                                  title
                                  url
                                  filename
                                  system {
                                    uid
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
                ... on PagePageComponentsOurTeam {
                  __typename
                  our_team {
                    description
                    title_h2
                    employees {
                      designation
                      name
                      imageConnection {
                        edges {
                          node {
                            url
                            title
                            filename
                            file_size
                            description
                            content_type
                            system {
                              content_type_uid
                              uid
                            }
                          }
                        }
                      }
                    }
                  }
                }
                ... on PagePageComponentsWidget {
                  __typename
                  widget {
                    title_h2
                    type
                  }
                }
                ... on PagePageComponentsContactDetails {
                  __typename
                  contact_details {
                    ...PagePageComponentsContactDetailsBlockFragment
                    address
                    email
                    phone
                  }
                }
              }
              title
              url
            }
          }
        }

        fragment PagePageComponentsContactDetailsBlockFragment on PagePageComponentsContactDetailsBlock {
          address
          email
          phone
        }

        QUERY;

        return $gql;
	}

  public static function getBlogArchivedFalseQuery(){
        $archived_false = <<<QUERY
        query MyQuery {
          all_blog_post(where: {is_archived: false}) {
            items {
              body
              date
              is_archived
              title
              url
              featured_imageConnection {
                edges {
                  node {
                    content_type
                    description
                    title
                    url
                    filename
                  }
                }
              }
              authorConnection {
                edges {
                  node {
                    ... on Author {
                      title
                      bio
                    }
                  }
                }
              }
            }
          }
        }
        QUERY; 
        return $archived_false;  
  }

  public static function getBlogArchivedTrueQuery(){


        $archived_true = <<<QUERY
        query MyQuery {
          all_blog_post(where: {is_archived: true}) {
            items {
              body
              date
              is_archived
              title
              url
              featured_imageConnection {
                edges {
                  node {
                    content_type
                    description
                    title
                    url
                    filename
                  }
                }
              }
              authorConnection {
                edges {
                  node {
                    ... on Author {
                      title
                      bio
                    }
                  }
                }
              }
            }
          }
        }
        QUERY;
        return $archived_true;
  }

  public static function getBlogEntry($url){


        $blog_entry_gql  = <<<QUERY
        query MyQuery {
          all_blog_post(where: {url: "$url"}) {
            items {
              body
              date
              is_archived
              title
              url
              featured_imageConnection {
                edges {
                  node {
                    content_type
                    description
                    title
                    url
                    filename
                  }
                }
              }
              authorConnection {
                edges {
                  node {
                    ... on Author {
                      title
                    }
                  }
                }
              }
              related_postConnection {
                edges {
                  node {
                    ... on BlogPost {
                      title
                      url
                      system {
                        uid
                      }
                      body
                      date
                    }
                  }
                }
              }
            }
          }
        }
        QUERY;

        return $blog_entry_gql;

  }
}