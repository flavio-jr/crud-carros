import { MiragePage } from './app.po';

describe('mirage App', () => {
  let page: MiragePage;

  beforeEach(() => {
    page = new MiragePage();
  });

  it('should display welcome message', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('Welcome to app!');
  });
});
